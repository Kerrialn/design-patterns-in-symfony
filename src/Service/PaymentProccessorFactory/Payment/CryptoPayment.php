<?php

namespace App\Service\PaymentProccessorFactory\Payment;

use App\Service\PaymentProccessorFactory\Contract\PaymentProcessorInterface;

class CryptoPayment implements PaymentProcessorInterface
{
    public function process(float $amount): string
    {
        return 'processing via crypto payment';
    }
}
