<?php

namespace BelOutilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AnnonceController extends Controller{

    public function indexAction()
    {
    // Encours!
    $repo = $this->getDoctrine()->getRepository('BelOutilBundle:Annonce');
    $search = $repo->getInfo();
    }
}
