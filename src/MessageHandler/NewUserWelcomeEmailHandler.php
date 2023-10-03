<?php

declare(strict_types=1);

namespace App\MessageHandler;

use App\Message\Notification;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
final class NewUserWelcomeEmailHandler
{
    public function __construct(
        private readonly LoggerInterface $logger,
    ) {
    }

    public function __invoke(Notification $welcomeEmail): void
    {
        $this->logger->info('Welcome new user!');
        // ... send an email!
    }
}
