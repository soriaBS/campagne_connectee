<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * commandeParProducteur
 *
 * @ORM\Table(name="commande_par_producteur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\commandeParProducteurRepository")
 */
class commandeParProducteur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="etatLivraison", type="string", length=255)
     */
    private $etatLivraison;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set etatLivraison
     *
     * @param string $etatLivraison
     *
     * @return commandeParProducteur
     */
    public function setEtatLivraison($etatLivraison)
    {
        $this->etatLivraison = $etatLivraison;

        return $this;
    }

    /**
     * Get etatLivraison
     *
     * @return string
     */
    public function getEtatLivraison()
    {
        return $this->etatLivraison;
    }
}

