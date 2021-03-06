<?php

namespace Colibri\Core\Repository;

use Colibri\Query\Builder;
use Colibri\Query\Statement\Modifiers;

/**
 * Class IndifferentRepositoryQueryFactory
 * @package Colibri\Core\Repository
 */
class IndifferentRepositoryQueryFactory extends AbstractRepositoryQueryFactory
{
    
    /**
     * @return Builder\Insert
     * @throws \Colibri\Exception\NullPointerException
     */
    public function createInsertQuery()
    {
        return parent::createInsertQuery()->addModifier(Modifiers::IGNORE);
    }
    
    /**
     * @return Builder\Update
     * @throws \Colibri\Exception\NullPointerException
     */
    public function createUpdateQuery()
    {
        return parent::createUpdateQuery()->addModifier(Modifiers::IGNORE);
    }
    
}