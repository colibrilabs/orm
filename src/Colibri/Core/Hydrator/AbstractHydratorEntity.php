<?php

namespace Colibri\Core\Hydrator;

use Colibri\Common\Inflector;
use Colibri\Core\Entity;
use Colibri\Core\Entity\EntityInterface;
use Colibri\Core\Entity\RepositoryInterface;
use Colibri\Core\Event\EntityLifecycleEvent;
use Colibri\Core\Hydrator;
use Colibri\Core\Metadata;
use Colibri\Core\ORMEvents;
use Colibri\Core\Proxy\EntityProxy;
use Colibri\Exception\NotSupportedException;

/**
 * Class AbstractHydratorEntity
 * @package Colibri\Core\Hydrator
 */
abstract class AbstractHydratorEntity extends Hydrator
{

  /**
   * @var RepositoryInterface
   */
  protected $repository;

  /**
   * HydratorEntity constructor.
   * @param RepositoryInterface $repository
   */
  public function __construct(RepositoryInterface $repository)
  {
    $this->repository = $repository;

    parent::__construct($repository->getEntityClassReflection());
  }

  /**
   * @param array $data
   * @param EntityInterface|EntityProxy $entity
   * @return EntityInterface|EntityProxy
   */
  public function hydrate(array $data, $entity)
  {
    $this->hydrateEntityProperties($entity, $data);
    
    $repository = $this->getRepository();
    $repository->dispatchEvent(ORMEvents::onEntityLoad, new EntityLifecycleEvent($repository, $entity));
    
    return $entity;
  }

  /**
   * @param EntityInterface $entity
   * @param array $data
   * @return $this
   */
  protected function hydrateEntityProperties(EntityInterface $entity, array $data)
  {
    $metadata = $this->getRepository()->getEntityMetadata();

    foreach ($metadata->getNames() as $columnName) {
      $columnSQLName = $metadata->getSQLName($columnName);

      if (isset($data[$columnSQLName])) {
        $value = $data[$columnSQLName];
        $this->setProperty($entity, Inflector::camelize($columnName), $metadata->toPhp($columnName, $value));
      }
    }

    return $this;
  }

  /**
   * @param EntityInterface|EntityProxy $entity
   * @param string $propertyName
   * @param mixed $value
   * @return $this
   */
  protected function setProperty($entity, $propertyName, $value)
  {
    if($this->getReflection()->hasProperty($propertyName)) {
      $property = $this->getReflection()->getProperty($propertyName);

      if (!$property->isPublic()) {
        $property->setAccessible(true);
      }

      $property->setValue($entity, $value);
    }

    return $this;
  }
  
  /**
   * @param object $entity
   * @return array
   */
  public function extract($entity)
  {
    $metadata = $this->getMetadata();
    $collection = [];
    
    foreach ($metadata->getNames() as $entityPropertyName) {
      $propertyName = Inflector::camelize($entityPropertyName);
      $rawPropertyName = $metadata->getSQLName($entityPropertyName);
      $propertyValue = $this->getReflection()->getProperty($propertyName)->getValue($entity);
  
      $propertyValue = $propertyValue !== null
        ? $metadata->toPlatform($entityPropertyName, $propertyValue) : null;

      $collection[$rawPropertyName] = $propertyValue;
    }
    
    return $collection;
  }

  /**
   * @return RepositoryInterface
   */
  public function getRepository()
  {
    return $this->repository;
  }
  
  /**
   * @return Entity\MetadataInterface
   */
  public function getMetadata()
  {
    return $this->getRepository()->getEntityMetadata();
  }

}