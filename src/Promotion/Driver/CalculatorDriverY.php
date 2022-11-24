<?php

declare(strict_types=1);

namespace App\Promotion\Driver;

use App\Promotion\Channel\ChannelInterface;

final class CalculatorDriverY implements PromotionCalculatorDriverInterface
{
    private const MINIMAL_AMOUNT = 30;

    public function supports(ChannelInterface $channel): bool
    {
        return $channel->is('Y');
    }

    public function calculate(int $amount, int $discount): int
    {
        $newAmount = $amount - $discount;
        if ($newAmount < self::MINIMAL_AMOUNT) {
            return self::MINIMAL_AMOUNT;
        }

        return $newAmount;
    }
}
