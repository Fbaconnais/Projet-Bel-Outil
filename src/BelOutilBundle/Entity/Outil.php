<?php

namespace Site\BelOutil\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table()
 */
class Outil {

    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categorie;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $marque;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieu;
    
    
    
    // GETTERS & SETTERS
    public function getId() {
        return $this->id;
    }

    public function getCategorie() {
        return $this->categorie;
    }

    public function getMarque() {
        return $this->marque;
    }

    public function getLieu() {
        return $this->lieu;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setCategorie($categorie) {
        $this->categorie = $categorie;
        return $this;
    }

    public function setMarque($marque) {
        $this->marque = $marque;
        return $this;
    }

    public function setLieu($lieu) {
        $this->lieu = $lieu;
        return $this;
    }

}
