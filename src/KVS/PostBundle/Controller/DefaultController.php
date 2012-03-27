<?php

namespace KVS\PostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use KVS\PostBundle\Document\Posts;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/post/create")
     * @Template()
     */
	public function createAction()
	{
		$post = new Posts();
		$post->setPostTitle((string) "A Foo Bar");

		$dm = $this->get('doctrine.odm.mongodb.document_manager');
		$dm->persist($post);
		$dm->flush();

		return new Response('Created post id '.$post->getId());
	}

    /**
     * @Route("/post/list")
     * @Template()
     */
	public function listAction()
	{
		$posts = $this->get('doctrine.odm.mongodb.document_manager')
			->getRepository('KVSPostBundle:Posts')
			->findAll();

		if (!$posts) {
			throw $this->createNotFoundException('No post found for id '.$id);
		}

		// do something, like pass the $post object into a template
		$result = '';
		foreach ($posts as $post){	
			$result .= $post->getPostTitle()."\n";
		}
		return new Response($result);
	}
}
