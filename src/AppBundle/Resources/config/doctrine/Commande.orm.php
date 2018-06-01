<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'AppBundle\Repository\CommandeRepository';
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'columnName' => 'idCommande',
   'fieldName' => 'idCommande',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->mapField(array(
   'columnName' => 'idUtilisateur',
   'fieldName' => 'idUtilisateur',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'dateCommande',
   'fieldName' => 'dateCommande',
   'type' => 'date',
  ));
$metadata->mapField(array(
   'columnName' => 'adresseArrivee',
   'fieldName' => 'adresseArrivee',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->mapField(array(
   'columnName' => 'referenceCommande',
   'fieldName' => 'referenceCommande',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->mapField(array(
   'columnName' => 'prixTotal',
   'fieldName' => 'prixTotal',
   'type' => 'float',
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);