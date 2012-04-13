<?php
namespace KVS\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use KVS\UserBundle\Document\Users;
use FOS\UserBundle\Controller\ResettingController as BaseController;

class ResettingController extends BaseController 
{

   public function requestAction()
    {
        return $this->container->get('templating')->renderResponse('KVSUserBundle:Resetting:request.html.'.$this->getEngine());
    }
}
