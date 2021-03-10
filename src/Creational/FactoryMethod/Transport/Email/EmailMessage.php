<?php

declare(strict_types=1);

namespace Brisum\Pattern\Creational\FactoryMethod\Transport\Email;

use Brisum\Pattern\Creational\FactoryMethod\Component\MessageInterface;

class EmailMessage implements MessageInterface
{
    public function send(string $destination, string $subject, string $text): bool
    {
        echo "Send email message...\n";
        echo "Destination: {$destination}\n";
        echo "Subject: {$subject}\n";
        echo "Text: {$text}\n";

        return true;
    }
}