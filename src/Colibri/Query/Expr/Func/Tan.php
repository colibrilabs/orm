<?php

namespace Colibri\Query\Expr\Func;

use Colibri\Exception\BadCallMethodException;
use Colibri\Query\Expr\Func;

class Tan extends Func
{
    
    /**
     * Tan constructor.
     * MySQL Function TAN
     *
     * @param array $parameters
     *
     * @throws BadCallMethodException
     */
    public function __construct(...$parameters)
    {
        parent::__construct('TAN', $parameters);
    }
    
}