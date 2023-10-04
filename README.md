<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>



# Code Base

**Moltaqa** Laravel Project Codebase For Back-end Team
Which Has The Main Features like
Roles, Permissions, Wallet, Chat....

# Chat Module Vendors
1. [x] User
2. [x] Provider
3. [x] Driver

# Wallet Using Example

    auth('admin')->user()
        ->walletType(WalletTypeEnum::MONEY, WalletTransactionTypeEnum::DEPOSIT)
        ->walletSteps(10)
        ->walletTransactionReason(WalletTransactionReasonEnum::DEPOSIT_ORDER_AMOUNT)
        ->walletCreate();

# Send Notification Firebase Example

            (new SendFCM(User::class))
            ->sendForAdmin(true)
            ->sendForUsers(false)
            ->sendNotification('test title','test body',User::first());
