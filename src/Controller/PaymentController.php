<?php

namespace App\Controller;

use App\Enum\PaymentTypeEnum;
use App\Service\PaymentProccessorFactory\PaymentFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PaymentController extends AbstractController
{
    public function __construct(
        private readonly PaymentFactory $paymentFactory
    ) {
    }

    #[Route(path: '/payment', name: 'payment')]
    public function factoryDesignPattern(): Response
    {
        $paymentProcessor = $this->paymentFactory->createProcessor(PaymentTypeEnum::PAYPAL_PAYMENT);
        $payment = $paymentProcessor->process(50.00);
        dd($payment);
    }
}
