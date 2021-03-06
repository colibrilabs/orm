<?php

namespace Colibri\Core\Event;

use Colibri\Core\Domain\EntityInterface;
use Colibri\Core\Domain\RepositoryInterface;

/**
 * Class EntityLifecycleEvent
 * @package Colibri\Core\Event
 */
class EntityLifecycleEvent extends AbstractEvent
{
    
    /**
     * @var EntityInterface
     */
    protected $entity;
    
    /**
     * @var RepositoryInterface
     */
    protected $repository;
    
    /**
     * EntityLifecycleEvent constructor.
     *
     * @param RepositoryInterface $repository
     * @param EntityInterface     $entity
     */
    public function __construct(RepositoryInterface $repository, EntityInterface $entity)
    {
        $this->entity = $entity;
        $this->repository = $repository;
    }
    
    /**
     * @return EntityInterface
     */
    public function getEntity()
    {
        return $this->entity;
    }
    
    /**
     * @return RepositoryInterface
     */
    public function getRepository()
    {
        return $this->repository;
    }
    
}