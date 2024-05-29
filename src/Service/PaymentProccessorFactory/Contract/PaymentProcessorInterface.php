<?php

namespace App\Service\PaymentProccessorFactory\Contract;

interface PaymentProcessorInterface
{
    public function process(float $amount): string;
}
