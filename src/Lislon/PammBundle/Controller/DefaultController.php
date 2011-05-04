<?php

namespace Lislon\PammBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LislonPammBundle:Default:index.html.twig');
    }
}
