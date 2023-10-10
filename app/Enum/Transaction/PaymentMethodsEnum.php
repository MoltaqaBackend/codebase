<?php

namespace App\Enum\Transaction;

enum PaymentMethodsEnum: string
{
    public const CASH = 'cash';
    public const ONLINE = 'online';
    public const PAY_ORDER = 'wallet_money';
}
