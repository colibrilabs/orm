<?php

namespace Colibri\Logger\Formatter;

use Colibri\Logger\Collection\Collection;

/**
 * Class JsonFormatter
 * @package Colibri\Logger\Formatter
 */
class JsonFormatter extends AbstractFormatter
{
    
    /**
     * @var bool
     */
    protected $prettyPrint = false;
    
    /**
     * JsonFormatter constructor.
     *
     * @param bool $prettyPrint
     */
    public function __construct($prettyPrint = false)
    {
        $this->prettyPrint = $prettyPrint;
    }
    
    /**
     * @param Collection $record
     *
     * @return string
     */
    public function format(Collection $record)
    {
        return json_encode($this->prepare($record), ($this->prettyPrint ? JSON_PRETTY_PRINT : 0));
    }
    
}