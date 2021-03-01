<?php

declare(strict_types=1);

namespace Brisum\Pattern\FactoryMethod;

use Brisum\Pattern\FactoryMethod\Message\Component\TransportInterface;

class App
{
    public function run(TransportInterface $transport): void
    {
        $message = $transport->createMessage();
        $message->send('bear', 'Spring is comming', 'Wake up!');
    }
}
