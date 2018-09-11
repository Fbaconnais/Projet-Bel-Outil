<?php

namespace Site\BelOutil\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table()
 */
class Annonce {
    
    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $resume;
    
    /**
     * @ORM\Column(type="text")
     */
    private $description;
    
    /**
     * @ORM\Column(type="dateTime")
     */
    private $dateParution;
    
     /**
     * @ORM\Column(type="dateTime")
     */
    private $dateExpiration;
    
     /**
     * @ORM\Column(type="string", length=30)
     */
    private $type;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $partage;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lienModif;

    /**
     * @ORM\Column(type="string", length=255)
     * @ORM\ManyToOne(targetEntity="Partenaire", mappedBy="annonces")
     */
    private $partenaire;
     
    /**
     * @ORM\OneToOne(targetEntity="BelOutilBundle\Entity\Outil")
     */
    private $outil;
    
    
    
    // GETTERS & SETTERS
    public function getId() {
        return $this->id;
    }

    public function getResume() {
        return $this->resume;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getDateParution() {
        return $this->dateParution;
    }

    public function getDateExpiration() {
        return $this->dateExpiration;
    }

    public function getType() {
        return $this->type;
    }

    public function getPhoto() {
        return $this->photo;
    }

    public function getPartage() {
        return $this->partage;
    }

    public function getLienModif() {
        return $this->lienModif;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setResume($resume) {
        $this->resume = $resume;
        return $this;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public function setDateParution($dateParution) {
        $this->dateParution = $dateParution;
        return $this;
    }

    public function setDateExpiration($dateExpiration) {
        $this->dateExpiration = $dateExpiration;
        return $this;
    }

    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    public function setPhoto($photo) {
        $this->photo = $photo;
        return $this;
    }

    public function setPartage($partage) {
        $this->partage = $partage;
        return $this;
    }

    public function setLienModif($lienModif) {
        $this->lienModif = $lienModif;
        return $this;
    }


}
