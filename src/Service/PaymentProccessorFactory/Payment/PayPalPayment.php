<?php

namespace App\Service\PaymentProccessorFactory\Payment;

use App\Service\PaymentProccessorFactory\Contract\PaymentProcessorInterface;

class PayPalPayment implements PaymentProcessorInterface
{
    public function process(float $amount): string
    {
        return 'processing via paypal';
    }
}
