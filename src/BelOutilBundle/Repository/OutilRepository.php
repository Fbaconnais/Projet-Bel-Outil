<?php

namespace BelOutilBundle\Controller;


class OutilRepository extends \Doctrine\ORM\EntityRepository
{
    public function getlieu($lieu)
    {
        $request = 'SELECT lieu
            FROM BelOutilBundle:Outil lieu
            WHERE lieu LIKE';
        $query = $this->getEntityManager()->createQuery($request);
        $query->setFirstResult(0);
        $query->setMaxResults($nbPosts);
        return $query->getResult();
    }
    
    
            
}

