<?php

namespace App\Service\PaymentProccessorFactory;

use App\Enum\PaymentTypeEnum;
use App\Service\PaymentProccessorFactory\Contract\PaymentProcessorInterface;
use App\Service\PaymentProccessorFactory\Payment\CardPayment;
use App\Service\PaymentProccessorFactory\Payment\CryptoPayment;
use App\Service\PaymentProccessorFactory\Payment\PayPalPayment;

final class PaymentFactory
{
    public function createProcessor(PaymentTypeEnum $paymentTypeEnum): PaymentProcessorInterface
    {
        return match ($paymentTypeEnum) {
            PaymentTypeEnum::CARD_PAYMENT => new CardPayment(),
            PaymentTypeEnum::CRYPTO_PAYMENT => new CryptoPayment(),
            PaymentTypeEnum::PAYPAL_PAYMENT => new PayPalPayment()
        };
    }
}
