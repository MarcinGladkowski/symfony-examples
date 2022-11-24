<?php

declare(strict_types=1);

namespace App\Promotion\Calculator;

use App\Promotion\Channel\ChannelInterface;
use App\Promotion\Exception\UnsupportedSalesChannel;

final class PromotionCalculator implements PromotionCalculatorInterface
{
    /**
     * @param iterable $drivers PromotionCalculatorDriverInterface
     */
    public function __construct(readonly private iterable $drivers)
    {
    }

    public function calculate(
        ChannelInterface $channel,
        int $amount,
        int $discount
    ): int {
        foreach ($this->drivers as $driver) {
            if ($driver->supports($channel)) {
                return $driver->calculate($amount, $discount);
            }
        }

        throw new UnsupportedSalesChannel($channel->getCode());
    }
}
