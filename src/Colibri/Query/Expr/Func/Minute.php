<?php

namespace Colibri\Query\Expr\Func;

use Colibri\Query\Expr\Func;
use Colibri\Exception\BadCallMethodException;

class Minute extends Func
{

  /**
   * Minute constructor.
   * MySQL Function MINUTE
   *
   * @param array $parameters
   * @throws BadCallMethodException
   */
  public function __construct(...$parameters)
  {
    parent::__construct('MINUTE', $parameters);
  }
  
}