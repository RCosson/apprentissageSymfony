<?php

namespace Simplon\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SimplonPlatformBundle:Default:index.html.twig');
    }
}
