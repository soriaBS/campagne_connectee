<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Enum\EtatLivraison;

/**
 * CommandeParProducteur
 */
class CommandeParProducteur
{


    /**
     * @var int
     */
    private $idCommandeProducteur;

    /**
     * @var int
     */
    private $idProducteur;

    /**
     * @var int
     */
    private $idLivreur;

    /**
     * @var int
     */
    private $etatLivraison;


    /**
     * Set idCommandeProducteur
     *
     * @param integer $idCommandeProducteur
     *
     * @return CommandeParProducteur
     */
    public function setIdCommandeProducteur($idCommandeProducteur)
    {
        $this->idCommandeProducteur = $idCommandeProducteur;

        return $this;
    }

    /**
     * Get idCommandeProducteur
     *
     * @return int
     */
    public function getIdCommandeProducteur()
    {
        return $this->idCommandeProducteur;
    }

    /**
     * Set idProducteur
     *
     * @param integer $idProducteur
     *
     * @return CommandeParProducteur
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
     * Set idLivreur
     *
     * @param integer $idLivreur
     *
     * @return CommandeParProducteur
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
     * Set etatLivraison
     *
     * @param integer $etatLivraison
     *
     * @return CommandeParProducteur
     */
    public function setEtatLivraison($etatLivraison)
    {
        if ($typeProduit >= count(EtatLivraison::getTousEtatsLivraison(), COUNT_NORMAL)) {
            throw new \InvalidArgumentException("Out of Bounds");
        }
        
        $this->etatLivraison = $etatLivraison;

        return $this;
    }

    /**
     * Get etatLivraison
     *
     * @return int
     */
    public function getEtatLivraison()
    {
        return $this->etatLivraison;
    }
}

