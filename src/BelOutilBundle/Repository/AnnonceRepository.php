<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace BelOutilBundle\Controller;

use Doctrine\ORM\EntityRepository;

class AnnonceRepository extends \Doctrine\ORM\EntityRepository {

public function getNeufDern() {
        $dql = 'SELECT a FROM BelOutilBundle:Annonce a ORDER BY a.dateParution DESC';
        $query = $this->getEntityManager()->createQuery($dql);
        $query->setMaxResults(9);
        return $query->getResult();
    }
}