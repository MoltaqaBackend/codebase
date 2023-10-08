<p align="center"><a href="https://www.linkedin.com/company/moltaqa/"
target="_blank">
<img src="https://scontent.fcai19-3.fna.fbcdn.net/v/t39.30808-6/295064610_450347597101663_8667352545573167439_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=a2f6c7&_nc_ohc=DclAfTKddr8AX_aagC5&_nc_ht=scontent.fcai19-3.fna&oh=00_AfCbqd6tDgsqs2y4grNdlX7vtIpczLSbqdQFB3aUqrkCSQ&oe=652594FA"></a></p>



# Code Base

**Moltaqa** Laravel Project Codebase For Back-end Team
Which Has The Main Features like
Roles, Permissions, Wallet, Chat, Notification(Mail,Pusher,Firebase,database), settings,images....

# Chat Module Vendors
1. [x] User
2. [x] Provider
3. [x] Driver

# MyFatoorah Payment Using Example
    myFatoorahTransaction(array: $data, float|int $amount);
    # This Will Return A Response Of Transaction If (Failed Or Successed)

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

# Send Notification Example

     ADMIN => Notification::sendnow($notifiables,new AdminNotification($notificationData)); >> will send via mail and database
     CLIENT => Notification::sendnow($notifiables,new ClientNotification($notificationData)); >> will send via firebase and database
     Notes
     Supported Mediums in BaseNotification Class => ['mail', 'sms', 'firebase','pusher', 'database']
     In BasNotification Class you can modify how each Medium Process or What it should transmit

# Setting Module Example Set And Get

    GET => setting(key:'general',default:'default data');
    SET => setting(key:'general',value:'data');

# Upload File With Collection Name Example

    uploadImage
    (
        collectionName: 'avatar'
        file: $request->file,
        model: $user
    )


## Run Locally

Clone the project

```bash
  git clone https://link-to-project
```

Go to the project directory

```bash
  cd my-project
```

Configure .env

```bash
  copy .env.example
```

Install Composer

```bash
  composer install
```

Start the server

```bash
  php artisan serve
```



## Github Commit Style Guide

- [Link 1](https://gist.github.com/ericavonb/3c79e5035567c8ef3267)
- [Link 2](https://gist.github.com/abravalheri/34aeb7b18d61392251a2)

## Composer Documentation Guide

- [Link](https://getcomposer.org/doc/articles/scripts.md)
