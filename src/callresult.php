<?php

namespace JSzczypk\WampSyncClient;

class CallResult 
{

    /** @var array<int,mixed> */
    public $arguments;

    /** @var array */
    public $argumentsKw;

    /**
     * @param array<int,mixed> $arguments
     */
    function __construct(array $arguments, array $argumentsKw) {
        $this->arguments = $arguments;
        $this->argumentsKw = $argumentsKw;
    }

}

// vim: tabstop=4 shiftwidth=4 expandtab


