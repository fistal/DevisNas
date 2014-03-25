<?php

namespace Nas\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Nas\UserBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class UtilisateurController extends Controller
{
	public function listAction()
	{
		$userManager = $this->get('fos_user.user_manager');
		
		$users = $userManager->findUsers();
		return $this->render('NasUserBundle:Utilisateur:list.html.twig', array('users'=>$users));
	}
}