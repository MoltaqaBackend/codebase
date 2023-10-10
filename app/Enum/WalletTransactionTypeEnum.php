<?php

namespace App\Enum;

enum WalletTransactionTypeEnum: string
{
    public const DEPOSIT = 'deposit';
    public const WITHDRAWAL = 'withdrawal';
}
