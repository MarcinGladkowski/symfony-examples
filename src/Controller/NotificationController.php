<?php

declare(strict_types=1);

namespace App\Controller;

use App\Message\Notification;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class NotificationController
{

    public function __construct()
    {
    }

    #[Route('/notify', name: 'notification_notify')]
    public function notify(MessageBusInterface $bus): JsonResponse
    {
        $bus->dispatch(new Notification());

        return new JsonResponse();
    }
}
