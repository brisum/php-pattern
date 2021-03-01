<?php

declare(strict_types=1);

namespace Brisum\Pattern\FactoryMethod\Message\Component;

interface TransportInterface
{
    public function createMessage(): MessageInterface;
}
