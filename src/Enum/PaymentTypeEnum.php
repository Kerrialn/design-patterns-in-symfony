<?php

namespace App\Enum;

enum PaymentTypeEnum: string
{
    case CARD_PAYMENT = 'card-payment';
    case CRYPTO_PAYMENT = 'crypto-payment';
    case PAYPAL_PAYMENT = 'paypal-payment';
}
