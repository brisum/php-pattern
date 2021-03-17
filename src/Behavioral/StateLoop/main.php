<?php

declare(strict_types=1);

use Brisum\Pattern\Behavioral\StateLoop\Component\DepositContext;
use Brisum\Pattern\Behavioral\StateLoop\Component\DepositStateInterface;
use Brisum\Pattern\Behavioral\StateLoop\Component\StateFactory;
use Brisum\Pattern\Behavioral\StateLoop\Entity\DepositEntity;

require_once __DIR__ . '/../../../bootstrap.php';

global $di;
$depositEntity = new DepositEntity();
$depositEntity->state = DepositStateInterface::DRAFT;
$stateFactory = new StateFactory($di);
$depositContext = new DepositContext($stateFactory, $depositEntity);

for ($step = 1; $step <= 100; $step++)
{
    $depositContext->process();

    if (DepositStateInterface::COMPLETE === $depositContext->getDepositEntity()->state)
    {
        echo "Done\n";
        break;
    }

    if (DepositStateInterface::FAILED === $depositContext->getDepositEntity()->state)
    {
        echo "Done\n";
        break;
    }
}
