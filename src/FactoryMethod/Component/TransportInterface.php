<?php

declare(strict_types=1);

namespace Brisum\Pattern\FactoryMethod\Component;

interface TransportInterface
{
    public function createMessage(): MessageInterface;
}
