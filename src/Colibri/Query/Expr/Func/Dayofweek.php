<?php

namespace Colibri\Query\Expr\Func;

use Colibri\Query\Expr\Func;
use Colibri\Exception\BadCallMethodException;

class Dayofweek extends Func
{

  /**
   * Dayofweek constructor.
   * MySQL Function DAYOFWEEK
   *
   * @param array $parameters
   * @throws BadCallMethodException
   */
  public function __construct(...$parameters)
  {
    parent::__construct('DAYOFWEEK', $parameters);
  }
  
}