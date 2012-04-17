<?php
namespace KVS\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Exception\AccountStatusException;
use KVS\UserBundle\Document\Users;
use FOS\UserBundle\Controller\ResettingController as BaseController;

class ResettingController extends BaseController 
{

   public function requestAction()
    {
        return $this->container->get('templating')->renderResponse('KVSUserBundle:Resetting:request.html.'.$this->getEngine());
    }

    public function resetAction($token)
    {
        $user = $this->container->get('fos_user.user_manager')->findUserByConfirmationToken($token);

        if (null === $user) {
            throw new NotFoundHttpException(sprintf('The user with "confirmation token" does not exist for value "%s"', $token));
        }

        if (!$user->isPasswordRequestNonExpired($this->container->getParameter('fos_user.resetting.token_ttl'))) {
            return new RedirectResponse($this->container->get('router')->generate('kvs_user_resetting_request'));
        }

        $form = $this->container->get('fos_user.resetting.form');
        $formHandler = $this->container->get('fos_user.resetting.form.handler');
        $process = $formHandler->process($user);

        if ($process) {
            $this->authenticateUser($user);

            $this->setFlash('fos_user_success', 'resetting.flash.success');

            return new RedirectResponse($this->getRedirectionUrl($user));
        }

        return $this->container->get('templating')->renderResponse('KVSUserBundle:Resetting:reset.html.'.$this->getEngine(), array(
            'token' => $token,
            'form' => $form->createView(),
            'theme' => $this->container->getParameter('fos_user.template.theme'),
        ));
    }

    public function sendEmailAction() 
    { 
        $username = $this->container->get('request')->request->get('username'); 
 
        $user = $this->container->get('fos_user.user_manager')->findUserByUsernameOrEmail($username); 
 
        if (null === $user) { 
            return $this->container->get('templating')->renderResponse('KVSUserBundle:Resetting:request.html.'.$this->getEngine(), array('invalid_username' => $username)); 
        } 
 
        if ($user->isPasswordRequestNonExpired($this->container->getParameter('fos_user.resetting.token_ttl'))) { 
            return $this->container->get('templating')->renderResponse('FOSUserBundle:Resetting:passwordAlreadyRequested.html.'.$this->getEngine()); 
        } 
 
        $user->generateConfirmationToken(); 
        $this->container->get('session')->set(static::SESSION_EMAIL, $this->getObfuscatedEmail($user)); 
        $this->container->get('fos_user.mailer')->sendResettingEmailMessage($user); 
        $user->setPasswordRequestedAt(new \DateTime()); 
        $this->container->get('fos_user.user_manager')->updateUser($user); 
 
        return new RedirectResponse($this->container->get('router')->generate('fos_user_resetting_check_email')); 
    }

    public function checkEmailAction()
    {
        $session = $this->container->get('session');
        $email = $session->get(static::SESSION_EMAIL);
        $session->remove(static::SESSION_EMAIL);

        if (empty($email)) {
            // the user does not come from the sendEmail action
            return new RedirectResponse($this->container->get('router')->generate('kvs_user_resetting_request'));
        }

        return $this->container->get('templating')->renderResponse('KVSUserBundle:Resetting:checkEmail.html.'.$this->getEngine(), array(
            'email' => $email,
        ));
    }
}
