<?php

namespace BelOutilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OutilController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('BelOutilBundle:Annonce');

        $annonces = $repository->getNeufDern();
        return $this->render('BelOutilBundle:Default:index.html.twig', array('annonces' => $annonces));
    }
