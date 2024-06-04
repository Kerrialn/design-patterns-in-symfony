<?php

namespace App\Service\CloneableService\Contract;

interface CloneableInterface
{
    public function __clone(): void;
}