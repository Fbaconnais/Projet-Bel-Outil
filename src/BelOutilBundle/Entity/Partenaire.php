<?php

namespace Site\BelOutil\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table()
 */
class Partenaire {

    /**
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $siteWeb;
    
    /**
     * @ORM\Column(type="string", length=255)
     * @ORM\OneToMany(targetEntity="Annonce", mappedBy="partenaire")
     */
    private $annonces;
    
    
    
    // GETTERS & SETTERS
    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSiteWeb() {
        return $this->siteWeb;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setSiteWeb($siteWeb) {
        $this->siteWeb = $siteWeb;
        return $this;
    }

    public function getAnnonces() {
        return $this->annonces;
    }

    public function setAnnonces($annonces) {
        $this->annonces = $annonces;
        return $this;
    }

}
