<?php

namespace App\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;

/**
 * Security controller.
 *
 */

class SecurityController extends Controller
{


    public function loginAction_old()
    {
        return $this->render('AppAdminBundle:Security:login.html.twig');
    }

   /**
     * @Route("/admin/login", name="_admin_login")
     * @Template()
     */
    public function loginAction()
    {
        if ($this->get('request')->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $this->get('request')->attributes->get(SecurityController::AUTHENTICATION_ERROR);
        } else {
            $error = $this->get('request')->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        return array(
            'last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        );
    }

    /**
     * @Route("/admin/login_check", name="_admin_check")
     */
    public function securityCheckAction()
    {
        // The security layer will intercept this request
//        return parent::securityCheckAction();
    }

    /**
     * @Route("/admin/logout", name="_admin_logout")
     */
    public function logoutAction()
    {
        // The security layer will intercept this request
//        return parent::logoutAction();
    }

}
