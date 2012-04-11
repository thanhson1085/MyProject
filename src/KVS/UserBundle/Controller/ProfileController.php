<?php
namespace KVS\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use KVS\UserBundle\Document\UserMeta;
use KVS\UserBundle\Document\User;
use KVS\UserBundle\Form\Type\UserMetaType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
//use FOS\UserBundle\Model\User;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class ProfileController extends Controller
{
    /**
     * @Route("/profile/edit")
     * @Template()
     */
    public function editAction(Request $request)
    {
        $usermeta = new UserMeta();

		$form = $this->createForm(new UserMetaType(), $usermeta);

		$user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user)){// || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

	    if ($request->getMethod() == 'POST') {
			$form->bindRequest($request);
			$dm = $this->get('doctrine.odm.mongodb.document_manager');
			//$usermeta->setUid($user->getId());
			$usermeta->setUser($user);
			$dm->persist($usermeta);
			$dm->flush();
			$dm = $this->get('doctrine.odm.mongodb.document_manager');
			$user->setUsermeta($usermeta);
			//$dm->persist($user);
			$dm->flush();
		}
        return $this->render('KVSUserBundle:Profile:profile.html.twig', array('form' => $form->createView(),));
    }

}
