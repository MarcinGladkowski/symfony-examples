<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api', 'api_')]
class AuthController
{
    #[Route('/check', name: 'check')]
    public function check(): JsonResponse
    {
        return new JsonResponse();
    }
}
