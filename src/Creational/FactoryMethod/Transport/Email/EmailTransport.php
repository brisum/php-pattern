<?php

declare(strict_types=1);

namespace Brisum\Pattern\Creational\FactoryMethod\Transport\Email;

use Brisum\Pattern\Creational\FactoryMethod\Component\MessageInterface;
use Brisum\Pattern\Creational\FactoryMethod\Component\TransportInterface;

class EmailTransport implements TransportInterface
{

    public function createMessage(): MessageInterface
    {
        return new EmailMessage();
    }
}