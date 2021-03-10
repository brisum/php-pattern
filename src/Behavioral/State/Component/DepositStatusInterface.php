<?php

declare(strict_types=1);

namespace Brisum\Pattern\Behavioral\State\Component;

interface DepositStatusInterface
{
    public const DRAFT = 'draft';
    public const READY_TO_PROCESSING = 'ready_to_processing';
    public const PENDING = 'pending';
    public const FAILED = 'failed';
    public const SUCCESS = 'success';
}
