<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'AppBundle\Repository\AvisRepository';
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'columnName' => 'idAvis',
   'fieldName' => 'idAvis',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'idUtilisateur',
   'fieldName' => 'idUtilisateur',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'idLivreur',
   'fieldName' => 'idLivreur',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'idProducteur',
   'fieldName' => 'idProducteur',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'idProduit',
   'fieldName' => 'idProduit',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'dateCreation',
   'fieldName' => 'dateCreation',
   'type' => 'date',
  ));
$metadata->mapField(array(
   'columnName' => 'texte',
   'fieldName' => 'texte',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->mapField(array(
   'columnName' => 'note',
   'fieldName' => 'note',
   'type' => 'integer',
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);