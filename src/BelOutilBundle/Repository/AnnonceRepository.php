<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace BelOutilBundle\Controller;


class OutilRepository extends \Doctrine\ORM\EntityRepository
{

    public function getAnnonce(){
            $request = 'SELECT resume
                FROM BelOutilBundle:Annonce resume ORDER BY resume.dateParution
                DESC';
            $query = $this->getEntityManager()->createQuery($request);
            $query->setMaxResults(10);
            return $query->getResult();
        }
}