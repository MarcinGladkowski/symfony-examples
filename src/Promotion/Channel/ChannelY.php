<?php

declare(strict_types=1);

namespace App\Promotion\Channel;

class ChannelY implements ChannelInterface
{
    public function is(string $channelCode): bool
    {
        return $channelCode === 'Y';
    }

    public function getCode(): string
    {
        return 'Y';
    }
}
