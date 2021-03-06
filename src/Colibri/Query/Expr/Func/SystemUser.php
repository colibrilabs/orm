<?php

namespace Colibri\Query\Expr\Func;

use Colibri\Exception\BadCallMethodException;
use Colibri\Query\Expr\Func;

class SystemUser extends Func
{
    
    /**
     * SystemUser constructor.
     * MySQL Function SYSTEM_USER
     *
     * @param array $parameters
     *
     * @throws BadCallMethodException
     */
    public function __construct(...$parameters)
    {
        parent::__construct('SYSTEM_USER', $parameters);
    }
    
}