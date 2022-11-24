<?php

declare(strict_types=1);

namespace App\Promotion\Channel;

class ChannelX implements ChannelInterface
{
    public function is(string $channelCode): bool
    {
        return $channelCode === 'X';
    }

    public function getCode(): string
    {
        return 'X';
    }
}
