<?php

namespace AppBundle\Entity;

/**
 * Avis
 */
class Avis
{

    /**
     * @var int
     */
    private $idAvis;

    /**
     * @var int
     */
    private $idUtilisateur;

    /**
     * @var int
     */
    private $idLivreur;

    /**
     * @var int
     */
    private $idProducteur;

    /**
     * @var int
     */
    private $idProduit;

    /**
     * @var \DateTime
     */
    private $dateCreation;

    /**
     * @var string
     */
    private $texte;

    /**
     * @var int
     */
    private $note;
    
    /**
     * Set idAvis
     * 
     * @param integer $idAvis
     * @return int
     */
    public function setIdAvis($idAvis)
    {
        return $this;
    }
    
    /**
     * Get idAvis
     *
     * @return int
     */
    public function getIdAvis()
    {
        return $this->idAvis;
    }

    /**
     * Set idUtilisateur
     *
     * @param integer $idUtilisateur
     *
     * @return Avis
     */
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    /**
     * Get idUtilisateur
     *
     * @return int
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * Set idLivreur
     *
     * @param integer $idLivreur
     *
     * @return Avis
     */
    public function setIdLivreur($idLivreur)
    {
        $this->idLivreur = $idLivreur;

        return $this;
    }

    /**
     * Get idLivreur
     *
     * @return int
     */
    public function getIdLivreur()
    {
        return $this->idLivreur;
    }

    /**
     * Set idProducteur
     *
     * @param integer $idProducteur
     *
     * @return Avis
     */
    public function setIdProducteur($idProducteur)
    {
        $this->idProducteur = $idProducteur;

        return $this;
    }

    /**
     * Get idProducteur
     *
     * @return int
     */
    public function getIdProducteur()
    {
        return $this->idProducteur;
    }

    /**
     * Set idProduit
     *
     * @param integer $idProduit
     *
     * @return Avis
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    /**
     * Get idProduit
     *
     * @return int
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Avis
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return Avis
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set note
     *
     * @param integer $note
     *
     * @return Avis
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return int
     */
    public function getNote()
    {
        return $this->note;
    }
}

