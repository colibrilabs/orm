<?php

namespace Colibri\Logger\Handler;

use Colibri\Logger\Collection\ArrayCollection;
use Colibri\Logger\Formatter\FormatterInterface;

/**
 * Interface HandlerInterface
 * @package Colibri\Logger\Handler
 */
interface HandlerInterface {

  /**
   * @param ArrayCollection $record
   * @return null
   */
  public function handle(ArrayCollection $record);

  /**
   * @param $level
   * @return boolean
   */
  public function levelAllow($level);

  /**
   * @return FormatterInterface
   */
  public function getFormatter();

  /**
   * @param FormatterInterface $formatter
   */
  public function setFormatter(FormatterInterface $formatter);

}