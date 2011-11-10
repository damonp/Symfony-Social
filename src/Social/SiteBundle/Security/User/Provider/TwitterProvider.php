<?php

namespace Social\SiteBundle\Security\User\Provider;

use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\DependencyInjection\Container;


#use FOS\TwitterBundle\Services\Twitter;
#use \FacebookApiException;
#use \TwitterOAuth;
use FOS\TwitterBundle\Services\Twitter;


class TwitterProvider implements UserProviderInterface
{
    /**
     * @var \Twitter
     */
    protected $twitter;
    protected $twitter_oauth;
    protected $userManager;
    protected $validator;
    protected $container;


    public function __construct(Twitter $twitter,\TwitterOAuth $twitter_oauth, $userManager, $validator, Container $container)
    {
        $this->twitter = $twitter;
        $this->twitter_oauth = $twitter_oauth;
        $this->userManager = $userManager;
        $this->validator = $validator;
        $this->container = $container;
    }

    public function supportsClass($class)
    {
        return $this->userManager->supportsClass($class);
    }

    public function findUserByTwitterId($twitterID)
    {
        return $this->userManager->findUserBy(array('twitterID' => $twitterID));
    }

    public function loadUserByUsername($username)
    {
        $user = $this->findUserByTwitterId($username);

         $request = $this->container->get('request');
         $session = $request->getSession();
       

         $this->twitter_oauth->setOAuthToken( $session->get('access_token') , $session->get('access_token_secret'));

        try {
             $info = $this->twitter_oauth->get('account/verify_credentials');
        } catch (Exception $e) {
             $info = null;
        }
      
        if (!empty($info)) {
            if (empty($user)) {
                $user = $this->userManager->createUser();
                $user->setEnabled(true);
                $user->setPassword('');
                $user->setAlgorithm('');
            }

            $username = $info->screen_name;

            
            $user->setTwitterID($info->id);
            $user->setTwitterUsername($username);
            $user->setEmail('');
            $user->setFirstname($info->name);

            $this->userManager->updateUser($user);
        }

        if (empty($user)) {
            throw new UsernameNotFoundException('The user is not authenticated on twitter');
        }

        return $user;
         
    }

    public function refreshUser(UserInterface $user)
    {
        if (!$this->supportsClass(get_class($user)) || !$user->getTwitterID()) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', get_class($user)));
        }

        return $this->loadUserByUsername($user->getTwitterID());
    }
}
