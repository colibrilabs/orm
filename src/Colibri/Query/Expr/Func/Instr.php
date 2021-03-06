<?php

namespace Colibri\Query\Expr\Func;

use Colibri\Exception\BadCallMethodException;
use Colibri\Query\Expr\Func;

class Instr extends Func
{
    
    /**
     * Instr constructor.
     * MySQL Function INSTR
     *
     * @param array $parameters
     *
     * @throws BadCallMethodException
     */
    public function __construct(...$parameters)
    {
        parent::__construct('INSTR', $parameters);
    }
    
}