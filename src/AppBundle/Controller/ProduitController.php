<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Produit;
use AppBundle\Form\ProduitType;
use AppBundle\Entity\Image;
use Cocur\Slugify\Slugify;
use AppBundle\Entity\Utilisateur;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use AppBundle\Entity\TypeProduit;

class ProduitController extends Controller
{
    /**
     * @Route("/ajouter-produit", name="produit_ajouter")
     */
    public function ajouterAction(Request $request)
    {
        //TODO : Récupérer l'utilisateur pour l'associer au produit
        $producteur = $this->getDoctrine()->getRepository(Utilisateur::class)->find(1);
        
        $produit = new Produit();
        $produitForm = $this->createForm(ProduitType::class,$produit);
        $produitForm ->add('image', FileType::class,[
            'label'=>'Ajouter une image',
            'required'=>true,
            'mapped'=>false,
        ]);
        $produitForm->handleRequest($request);
        if($produitForm->isSubmitted() && $produitForm->isValid()){
            // $file stores the uploaded PDF file
            $file = $produitForm['image']->getData();
            $fileName = $produit->getNom().'_'.$file->getClientOriginalName();//.'.'.$file->guessExtension();
            $image = new Image();
            $image->setProduit($produit);
            $image->setLibelle($fileName);
            // moves the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('image_produit'),
                $fileName
                );
            $produit->addImage($image);
            $produit->setEstHistorise(false);
            $produit->setDateMiseEnLigne(new \DateTime());
            $produit->setProducteur($producteur);

            $slugify = new Slugify();
            $slug=$slugify->slugify($produit->getNom().$produit->getProducteur()->getNomUtilisateur());
            $produit->setSlug($slug);
            #Enregistrement en base de donnees
            $em = $this->getDoctrine()->getManager();
            $em->persist($image);
            $em->persist($produit);
            $em->flush();
            $this->addFlash("success","Produit enregistré.");
            return $this->redirectToRoute("homepage");
        }
        return $this->render('produit/ajouter_produit.html.twig',[
            "produitForm"=>$produitForm->createView()
        ]);

    }
    
    /**
     * @Route("/modifier-produit/{slug}", name="produit_modifier")
     */
    public function modifierAction(Request $request,$slug)
    {
        $produit = $this->getDoctrine()->getRepository(Produit::class)->findOneBySlug($slug);
        $produitForm = $this->createForm(ProduitType::class,$produit);
        $produitForm->handleRequest($request);
        if($produitForm->isSubmitted() && $produitForm->isValid()){
            $produit->setEstHistorise(false);
            $produit->setDateMiseEnLigne(new \DateTime());
            $slugify = new Slugify();
            $slug=$slugify->slugify($produit->getNom().$produit->getProducteur()->getNomUtilisateur());
            $produit->setSlug($slug);
            #Enregistrement en base de donnees
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
            $this->addFlash("success","Produit enregistré.");
            return $this->redirectToRoute("homepage");
        }
        return $this->render('produit/modifier_produit.html.twig',[
            "produitForm"=>$produitForm->createView()
        ]);
        
    }
    
    /**
     * @Route("/afficher-produit/{slug}", name="produit_afficher")
     */
    public function afficherAction($slug)
    {
        $produit = $this->getDoctrine()->getRepository(Produit::class)->findOneBySlug($slug);
        
        return $this->render('produit/afficher_produit.html.twig',[
            "produit"=>$produit
        ]);
        
    }
    
    /**
     * @Route("/supprimer-produit/{slug}",name="produit_supprimer")
     * 
     */
    public function supprimerAction($slug){
        if(!$slug){
            throw $this->createNotFoundException("Le produit n'existe pas.");
        }
        $repo = $this->getDoctrine()->getRepository(Produit::class);
        $produit = $repo->findOneBySlug($slug);
        $produit->setEstHistorise(true);
        $produit->setStock(0);

        $em = $this->getDoctrine()->getManager();
        $em->persist($produit);
        $em->flush();
        
        return $this->redirectToRoute("homepage");
    }
    
    /**
     * @Route("/rechercher-produits-par-type/{type}",name="produit_rechercher_par_type")
     * 
     */
    //Méthode non testée ni intégrée.
    public function rechercherParTypeAction($type){
        $repo = $this->getDoctrine()->getRepository(TypeProduit::class);
        $produits = $repo->findBy(['type'=>$type]);
        
        return $this->render('default/index.html.twig',[
            "produits"=>$produits
        ]);
    }
  
}
