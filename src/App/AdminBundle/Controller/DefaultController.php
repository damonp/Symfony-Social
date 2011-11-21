<?php

namespace App\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/admin/")
     * @Template()
     */
    public function indexAction()
    {
        //return array('name' => $name);
        return $this->render('AppAdminBundle:Default:index.html.twig');
    }
}
