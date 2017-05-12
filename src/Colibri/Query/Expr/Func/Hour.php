<?php

namespace Colibri\Query\Expr\Func;

use Colibri\Query\Expr\Func;
use Colibri\Exception\BadCallMethodException;

class Hour extends Func
{

  /**
   * Hour constructor.
   * MySQL Function HOUR
   *
   * @param array $parameters
   * @throws BadCallMethodException
   */
  public function __construct(...$parameters)
  {
    parent::__construct('HOUR', $parameters);
  }
  
}