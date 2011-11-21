<?php

namespace App\AdminBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ContentController extends Controller
{
    /**
     * @Route("/{slug}")
     * @Template()
     */
    public function slugAction($slug='')
    {

			$slug = $slug == '' ? 'index':$slug;

      $em = $this->getDoctrine()->getEntityManager();
     	$entity = $em->getRepository('AppAdminBundle:Content')->findOneBy(array('slug'=>$slug));
			if($entity)
			{
				$content = $entity->getContent();
			}
			else
			{
				//404
				throw $this->createNotFoundException('The page does not exist');
			}
		  return $this->render('AppAdminBundle:Content:content.html.twig', array('content'=>$content));
    }

}
