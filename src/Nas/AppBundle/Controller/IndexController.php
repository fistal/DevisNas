<?php

namespace Nas\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('NasAppBundle:Index:index.html.twig');
    }
}
