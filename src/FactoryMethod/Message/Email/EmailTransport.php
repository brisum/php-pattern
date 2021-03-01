<?php

declare(strict_types=1);

namespace Brisum\Pattern\FactoryMethod\Message\Email;

use Brisum\Pattern\FactoryMethod\Message\Component\MessageInterface;
use Brisum\Pattern\FactoryMethod\Message\Component\TransportInterface;

class EmailTransport implements TransportInterface
{

    public function createMessage(): MessageInterface
    {
        return new EmailMessage();
    }
}