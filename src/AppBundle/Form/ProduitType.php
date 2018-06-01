<?php

namespace AppBundle\Form;

use AppBundle\Entity\TypeProduit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ProduitType extends AbstractType
{
    /**
     * {@inheritdoc} 
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('type',EntityType::class,[
                'class' => TypeProduit::class,
                "choice_label" => 'libelle',
            ])
            ->add('quantite')
            ->add('prix')
            ->add('dateFin',DateType::class,[
                'label' => 'Date de fin de l offre'
            ])
            ->add('stock');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Produit'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_produit';
    }


}
