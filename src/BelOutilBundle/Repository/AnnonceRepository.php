<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace BelOutilBundle\Controller;

use Doctrine\ORM\EntityRepository;

class OutilRepository extends EntityRepository {

    public function getAnnonce() {
        $request = 'SELECT resume
                FROM BelOutilBundle:Annonce resume ORDER BY resume.dateParution
                DESC';
        $query = $this->getEntityManager()->createQuery($request);
        $query->setMaxResults(10);
        return $query->getResult();
    }

    public function getInfo($keyword) {
        $em = $this->getEntityManager();
        $query = $em->createQuery('SELECT a FROM BelOutilBundle:Annonce a JOIN a.outil o '
                . 'WHERE (a.description LIKE :key OR a.resume LIKE :key OR a.resume LIKE :key)');
        $query->setParameter('key', '%' . $keyword . '%');
        return $query->getResult();
 
    }

}
