<?php

declare(strict_types=1);

namespace Brisum\Pattern\Creational\FactoryMethod\Component;

interface MessageInterface
{
    public function send(string $destination, string $subject, string $text): bool;
}
