<?php

declare(strict_types=1);

require_once __DIR__ . '/../../../bootstrap.php';

use Brisum\Pattern\Creational\FactoryMethod\Component\TransportFactory;

global $di;
$transportFactory = new TransportFactory($di);
$transport = $transportFactory->getTransport('sms');

$transport->createMessage()->send('Bear', 'Sprint is coming...', 'Wake up!');
