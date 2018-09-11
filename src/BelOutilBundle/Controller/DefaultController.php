<?php

namespace BelOutilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->render('BelOutilBundle:Default:index.html.twig');
    }
}
