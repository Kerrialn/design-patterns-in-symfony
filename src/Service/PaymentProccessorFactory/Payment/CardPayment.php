<?php

namespace App\Service\PaymentProccessorFactory\Payment;

use App\Service\PaymentProccessorFactory\Contract\PaymentProcessorInterface;

class CardPayment implements PaymentProcessorInterface
{
    public function process(float $amount): string
    {
        return 'processing via card payment';
    }
}
