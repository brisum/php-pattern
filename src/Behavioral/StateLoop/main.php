<?php

declare(strict_types=1);

use Brisum\Pattern\Behavioral\StateLoop\Component\DepositContext;
use Brisum\Pattern\Behavioral\StateLoop\Component\DepositStateInterface;
use Brisum\Pattern\Behavioral\StateLoop\Component\StateFactory;
use Brisum\Pattern\Behavioral\StateLoop\Entity\DepositEntity;

require_once __DIR__ . '/../../../bootstrap.php';

global $di;
$depositEntity = new DepositEntity();
$stateFactory = new StateFactory($di);
$depositContext = new DepositContext($depositEntity);

for ($step = 1; $step <= 100; $step++)
{
    $stateFactory->createState($depositEntity->getState())->process($depositContext);
    $depositEntity = $depositContext->getDepositBuilder()->getDepositEntity();

    if (DepositStateInterface::COMPLETE === $depositEntity->getState())
    {
        echo "Done\n";
        break;
    }

    if (DepositStateInterface::FAILED === $depositEntity->getState())
    {
        echo "Done\n";
        break;
    }
}
