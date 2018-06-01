<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'AppBundle\Repository\CommandeParProducteurRepository';
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'columnName' => 'idCommandeProducteur',
   'fieldName' => 'idCommandeProducteur',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'idProducteur',
   'fieldName' => 'idProducteur',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'idLivreur',
   'fieldName' => 'idLivreur',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'etatLivraison',
   'fieldName' => 'etatLivraison',
   'type' => 'integer',
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);