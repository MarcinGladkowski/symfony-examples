<?php

declare(strict_types=1);

namespace App\Controller;

use App\Promotion\Calculator\PromotionCalculator;
use App\Promotion\Channel\ChannelX;
use App\Promotion\Channel\ChannelY;
use App\Promotion\Exception\UnsupportedSalesChannel;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PromotionController
{
    /**
     * @throws UnsupportedSalesChannel
     */
    #[Route('/promotion', name: 'promotion')]
    public function calculate(PromotionCalculator $calculator): Response
    {
        $random = random_int(0, 1);

        $price = $calculator->calculate($random ? new ChannelX() : new ChannelY(), 100, 20);

        return new JsonResponse([
            'price' => $price
        ]);
    }
}
