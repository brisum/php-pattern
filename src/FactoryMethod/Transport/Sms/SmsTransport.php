<?php

declare(strict_types=1);

namespace Brisum\Pattern\FactoryMethod\Transport\Sms;

use Brisum\Pattern\FactoryMethod\Component\MessageInterface;
use Brisum\Pattern\FactoryMethod\Component\TransportInterface;

class SmsTransport implements TransportInterface
{
    public function createMessage(): MessageInterface
    {
        return new SmsMessage();
    }
}