<?php

namespace App\Controller;

use App\Enum\PaymentTypeEnum;
use App\Service\Mailer\Facade\MailerFacade;
use App\Service\PaymentProccessorFactory\PaymentFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PaymentController extends AbstractController
{
    public function __construct(
        private readonly PaymentFactory $paymentFactory,
        private readonly MailerFacade $mailerFacade,
    ) {
    }

    #[Route(path: '/payment', name: 'payment')]
    public function factoryDesignPattern(): Response
    {
        $paymentProcessor = $this->paymentFactory->createProcessor(PaymentTypeEnum::PAYPAL_PAYMENT);
        $payment = $paymentProcessor->process(50.00);
        dd($payment);
    }

    #[Route(path: '/send/email', name: 'payment_send_email')]
    public function facadeDesignPattern(): Response
    {
        $this->mailerFacade->sendWelcomeEmail(recipient: 'bob@gm.com', name: 'Bob');

        $paymentProcessor = $this->paymentFactory->createProcessor(PaymentTypeEnum::PAYPAL_PAYMENT);
        $payment = $paymentProcessor->process(50.00);
        dd($payment);
    }
}
