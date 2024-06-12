<?php

namespace App\Service\Mailer\Facade;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;

class MailerFacade
{
    public const APPLICATION_NO_REPLY_EMAIL_ADDRESS = 'no-reply@example.com';

    public function __construct(
        private readonly MailerInterface $mailer
    ) {
    }

    /**
     * @throws TransportExceptionInterface
     * @param string[] $context
     */
    public function sendTemplatedEmail(
        string $from,
        string $to,
        string $subject,
        string $template,
        array $context = [],
    ): void {
        $email = (new TemplatedEmail())
            ->from($from)
            ->to($to)
            ->subject($subject)
            ->htmlTemplate($template)
            ->context($context);

        $this->send($email);
    }

    public function sendWelcomeEmail(
        string $recipient,
        string $name
    ): void {
        $this->sendTemplatedEmail(
            from: self::APPLICATION_NO_REPLY_EMAIL_ADDRESS,
            to: $recipient,
            subject: 'welcome!!!!',
            template: 'emails/welcome.html.twig',
            context: [
                'name' => $name,
            ]
        );
    }

    /**
     * @throws TransportExceptionInterface
     */
    private function send(TemplatedEmail $email): void
    {
        try {
            $this->mailer->send($email);
        } catch (TransportExceptionInterface $exception) {
            throw new $exception();
        }
    }
}
