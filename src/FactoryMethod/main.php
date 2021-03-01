<?php

declare(strict_types=1);

use Brisum\Pattern\FactoryMethod\App;
use Brisum\Pattern\FactoryMethod\Message\Email\EmailTransport;
use Brisum\Pattern\FactoryMethod\Message\Sms\SmsTransport;

require_once __DIR__ . '/../../bootstrap.php';

if (random_int(0, 1)) {
    $messageTransport = new EmailTransport();
} else {
    $messageTransport = new SmsTransport();
}

$app = new App();
$app->run($messageTransport);
