<?php

namespace Colibri\Core\Event;

use Colibri\Core\Entity\MetadataInterface;
use Colibri\EventDispatcher\Event;

/**
 * Class MetadataLoadEvent
 * @package Colibri\Core\Event
 */
class MetadataLoadEvent extends Event
{
  
  /**
   * @var MetadataInterface
   */
  protected $metadata;
  
  /**
   * MetadataLoadEvent constructor.
   * @param MetadataInterface $metadata
   */
  public function __construct(MetadataInterface $metadata)
  {
    $this->metadata = $metadata;
  }
  
  /**
   * @return MetadataInterface
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  
}