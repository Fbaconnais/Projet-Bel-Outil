<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace BelOutilBundle\Controller;


class AnnonceRepository extends \Doctrine\ORM\EntityRepository
{

    public function getAnnonce(){
        $request = 'SELECT resume
            FROM BelOutilBundle:Annonce resume ORDER BY resume.dateParution
            DESC';
        $query = $this->getEntityManager()->createQuery($request);
        $query->setMaxResults(20);
        return $query->getResult();
    }
    
    public function getAccueil(){
        $request = 'SELECT cat FROM BelOutilBundle:Annonce';
        
    }
        
}
