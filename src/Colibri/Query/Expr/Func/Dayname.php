<?php

namespace Colibri\Query\Expr\Func;

use Colibri\Query\Expr\Func;
use Colibri\Exception\BadCallMethodException;

class Dayname extends Func
{

  /**
   * Dayname constructor.
   * MySQL Function DAYNAME
   *
   * @param array $parameters
   * @throws BadCallMethodException
   */
  public function __construct(...$parameters)
  {
    parent::__construct('DAYNAME', $parameters);
  }
  
}