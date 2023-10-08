<?php

namespace App\Enum\Transaction;

enum PaymentMethodsEnum:string
{

    const CASH = 'cash';
    const ONLINE = 'online';
    const PAY_ORDER = 'wallet_money';
}
