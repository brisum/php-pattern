<?php

declare(strict_types=1);

namespace Brisum\Pattern\FactoryMethod\Message\Sms;

use Brisum\Pattern\FactoryMethod\Message\Component\MessageInterface;
use Brisum\Pattern\FactoryMethod\Message\Component\TransportInterface;

class SmsTransport implements TransportInterface
{
    public function createMessage(): MessageInterface
    {
        return new SmsMessage();
    }
}