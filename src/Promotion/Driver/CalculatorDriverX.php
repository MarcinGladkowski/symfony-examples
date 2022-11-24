<?php

declare(strict_types=1);

namespace App\Promotion\Driver;

use App\Promotion\Channel\ChannelInterface;

final class CalculatorDriverX implements PromotionCalculatorDriverInterface
{
    public function supports(ChannelInterface $channel): bool
    {
        return $channel->is('X');
    }

    public function calculate(int $amount, int $discount): int
    {
        return $amount * $discount / 100;
    }
}
