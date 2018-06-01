<?php

namespace AppBundle\Entity;

/**
 * Commande
 */
class Commande
{
    /**
     * @var int
     */
    private $idCommande;

    /**
     * @var int
     */
    private $idUtilisateur;

    /**
     * @var \DateTime
     */
    private $dateCommande;

    /**
     * @var string
     */
    private $adresseArrivee;

    /**
     * @var string
     */
    private $referenceCommande;

    /**
     * @var float
     */
    private $prixTotal;
    
    /**
     * Set idCommande
     * 
     *@param $idCommande
     * @return int
     */
    public function setIdCommande($idCommande)
    {
        $this->idCommande =$idCommande;
        
        return $this;
    }
    

    /**
     * Get idCommande
     *
     * @return int
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }

    /**
     * Set idUtilisateur
     *
     * @param integer $idUtilisateur
     *
     * @return Commande
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
     * Set dateCommande
     *
     * @param \DateTime $dateCommande
     *
     * @return Commande
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    /**
     * Get dateCommande
     *
     * @return \DateTime
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * Set adresseArrivee
     *
     * @param string $adresseArrivee
     *
     * @return Commande
     */
    public function setAdresseArrivee($adresseArrivee)
    {
        $this->adresseArrivee = $adresseArrivee;

        return $this;
    }

    /**
     * Get adresseArrivee
     *
     * @return string
     */
    public function getAdresseArrivee()
    {
        return $this->adresseArrivee;
    }

    /**
     * Set referenceCommande
     *
     * @param string $referenceCommande
     *
     * @return Commande
     */
    public function setReferenceCommande($referenceCommande)
    {
        $this->referenceCommande = $referenceCommande;

        return $this;
    }

    /**
     * Get referenceCommande
     *
     * @return string
     */
    public function getReferenceCommande()
    {
        return $this->referenceCommande;
    }

    /**
     * Set prixTotal
     *
     * @param float $prixTotal
     *
     * @return Commande
     */
    public function setPrixTotal($prixTotal)
    {
        $this->prixTotal = $prixTotal;

        return $this;
    }

    /**
     * Get prixTotal
     *
     * @return float
     */
    public function getPrixTotal()
    {
        return $this->prixTotal;
    }
}

