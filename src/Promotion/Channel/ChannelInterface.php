<?php

declare(strict_types=1);

namespace App\Promotion\Channel;

interface ChannelInterface
{
    public function is(string $channelCode): bool;

    public function getCode(): string;
}
