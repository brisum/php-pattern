<?php

declare(strict_types=1);

namespace Brisum\Pattern\Creational\FactoryMethod\Component;

interface TransportInterface
{
    public function createMessage(): MessageInterface;
}
