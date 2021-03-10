<?php

declare(strict_types=1);

namespace Brisum\Pattern\Creational\FactoryMethod\Transport\Sms;

use Brisum\Pattern\Creational\FactoryMethod\Component\MessageInterface;
use Brisum\Pattern\Creational\FactoryMethod\Component\TransportInterface;

class SmsTransport implements TransportInterface
{
    public function createMessage(): MessageInterface
    {
        return new SmsMessage();
    }
}