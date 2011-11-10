<?php

namespace Social\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
 
      //$sess = $this->get( 'session' );

       //$tweet = $this->get('fos_twitter.api');

       //$tweet->setOAuthToken('3022351-zz7QzFXj0S96UoizypzyQMuNMT1WCvgzzCxzDqq9c', 'SAoqos3xcqQRjbaVyLO6AM3SQ9YcGuA1LCm23FvNB9M');

//echo $sess->get('access_token');exit;
       //$info = $tweet->get('account/verify_credentials');

      //print_r($info);

//echo $info->screen_name; exit;
        return array('info' => '');
    }

    /**
    * @Route("/connectTwitter", name="connect_twitter")
    *
    */
    public function connectTwitterAction()
    {

      $request = $this->get('request');
      $twitter = $this->get('fos_twitter.service');

      $authURL = $twitter->getLoginUrl($request);

      $response = new RedirectResponse($authURL);

      return $response;

    }

    /** 
    * @Route("/facebook", name="facebook")
    *
    */
    public function facebookAction()
    {   

        return $this->render('SocialSiteBundle:Default:index.html.twig');
    } 


    /** 
    * @Route("/twitter", name="twitter")
    *
    */
    public function twitterAction()
    {   

        return $this->render('SocialSiteBundle:Default:index.html.twig');
    }  


}
