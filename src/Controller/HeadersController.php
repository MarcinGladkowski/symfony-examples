<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HeadersController extends AbstractController
{
    #[Route('/check_headers', name: 'check_headers', methods: 'POST')]
    public function checkOptions(): JsonResponse
    {
        return new JsonResponse();
    }
}
