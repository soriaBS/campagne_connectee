<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Produit;
use AppBundle\Form\PanierType;
use AppBundle\Form\ProduitType;
use AppBundle\Entity\Image;
use Cocur\Slugify\Slugify;
use AppBundle\Entity\Utilisateur;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use AppBundle\Entity\Enum\TypeProduit;
use AppBundle\Entity\Panier;

class PanierController extends Controller
{


/**
* @Route("/panier/{slug}",name="panier")
 */
public function panierAction($slug)
{
    $ppanier = $this->getDoctrine()->getRepository(Panier::class)->findOneBySlug($slug);
    
    return $this->render('panier/panier.html.twig',[
        "panier"=>$panier
    ]);
    
}}
  