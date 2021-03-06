<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Enum\TypeVehicule;
use AppBundle\Entity\Enum\TypePermis;

/**
 * Livreur
 *
 * @ORM\Table(name="livreur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LivreurRepository")
 */
class Livreur
{

    /**
     * @var int
     * 
     * @ORM\idLivreur
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="idLivreur", type="integer")
     */
    private $idLivreur;

    /**
     * @var int
     *
     * @ORM\Column(name="idUtilisateur", type="integer")
     */
    private $idUtilisateur;

    /**
     * @var int
     *
     * @ORM\Column(name="typeVehicule", type="integer")
     */
    private $typeVehicule;

    /**
     * @var string
     *
     * @ORM\Column(name="modeleVehicule", type="string", length=255)
     */
    private $modeleVehicule;

    /**
     * @var int
     *
     * @ORM\Column(name="typePermis", type="integer")
     */
    private $typePermis;

    /**
     * @var string
     *
     * @ORM\Column(name="capaciteChargement", type="string", length=255)
     */
    private $capaciteChargement;

    /**
     * @var int
     *
     * @ORM\Column(name="possedeClaciere", type="integer")
     */
    private $possedeClaciere;

    /**
     * @var string
     *
     * @ORM\Column(name="horairesLivraison", type="string", length=255)
     */
    private $horairesLivraison;


       /**
     * Set idLivreur
     *
     * @param integer $idLivreur
     *
     * @return Livreur
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
     * Set idUtilisateur
     *
     * @param integer $idUtilisateur
     *
     * @return Livreur
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
     * Set typeVehicule
     *
     * @param integer $typeVehicule
     *
     * @return Livreur
     */
    public function setTypeVehicule($typeVehicule)
    {
        if ($typeProduit >= count(TypeVehicule::getTousTypesVehicules(), COUNT_NORMAL)) {
            throw new \InvalidArgumentException("Out of Bounds");
        }
        
        $this->typeVehicule = $typeVehicule;

        return $this;
    }

    /**
     * Get typeVehicule
     *
     * @return int
     */
    public function getTypeVehicule()
    {
        return $this->typeVehicule;
    }

    /**
     * Set modeleVehicule
     *
     * @param string $modeleVehicule
     *
     * @return Livreur
     */
    public function setModeleVehicule($modeleVehicule)
    {
        $this->modeleVehicule = $modeleVehicule;

        return $this;
    }

    /**
     * Get modeleVehicule
     *
     * @return string
     */
    public function getModeleVehicule()
    {
        return $this->modeleVehicule;
    }

    /**
     * Set typePermis
     *
     * @param integer $typePermis
     *
     * @return Livreur
     */
    public function setTypePermis($typePermis)
    {
        if ($typeProduit >= count(TypePermis::getTousTypesPermis(), COUNT_NORMAL)) {
            throw new \InvalidArgumentException("Out of Bounds");
        }
        
        $this->typePermis = $typePermis;

        return $this;
    }

    /**
     * Get typePermis
     *
     * @return int
     */
    public function getTypePermis()
    {
        return $this->typePermis;
    }

    /**
     * Set capaciteChargement
     *
     * @param string $capaciteChargement
     *
     * @return Livreur
     */
    public function setCapaciteChargement($capaciteChargement)
    {
        $this->capaciteChargement = $capaciteChargement;

        return $this;
    }

    /**
     * Get capaciteChargement
     *
     * @return string
     */
    public function getCapaciteChargement()
    {
        return $this->capaciteChargement;
    }

    /**
     * Set possedeClaciere
     *
     * @param integer $possedeClaciere
     *
     * @return Livreur
     */
    public function setPossedeClaciere($possedeClaciere)
    {
        $this->possedeClaciere = $possedeClaciere;

        return $this;
    }

    /**
     * Get possedeClaciere
     *
     * @return int
     */
    public function getPossedeClaciere()
    {
        return $this->possedeClaciere;
    }

    /**
     * Set horairesLivraison
     *
     * @param string $horairesLivraison
     *
     * @return Livreur
     */
    public function setHorairesLivraison($horairesLivraison)
    {
        $this->horairesLivraison = $horairesLivraison;

        return $this;
    }

    /**
     * Get horairesLivraison
     *
     * @return string
     */
    public function getHorairesLivraison()
    {
        return $this->horairesLivraison;
    }
}

