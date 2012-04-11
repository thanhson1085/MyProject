<?php
namespace KVS\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use KVS\UserBundle\Document\UserMeta;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/user/create")
     * @Template("KVSUserBundle:Registration:register.html.twig")
     */
    public function createAction()
    {
        $user = new UserMeta();
        $user->setAddress((string) "A Foo Bar");

        $dm = $this->get('doctrine.odm.mongodb.document_manager');
        $dm->persist($user);
        $dm->flush();

        //return new Response('Created user id '.$user->getId());
        return $this->container->get('templating')->renderResponse("KVSUserBundle:Profile:profile.html.twig");
    }

}
