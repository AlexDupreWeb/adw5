<?php

namespace Adw\Bundle\AdwBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdwBundle:Default:index.html.twig');
    }
    public function previewAction()
    {
        return $this->render('AdwBundle:Default:index.html.twig');
    }
}
