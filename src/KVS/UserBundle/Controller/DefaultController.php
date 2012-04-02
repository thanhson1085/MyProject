<?php
namespace KVS\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use KVS\UserBundle\Document\Users;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/user/create")
     * @Template()
     */
    public function createAction()
    {
        $user = new Users();
        $user->setAddress((string) "A Foo Bar");

        $dm = $this->get('doctrine.odm.mongodb.document_manager');
        $dm->persist($user);
        $dm->flush();

        return new Response('Created user id '.$user->getId());
    }

}
