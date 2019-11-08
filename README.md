# Monetbil PHP Library

This repository contains the open source PHP SDK that allows you to access the Monetbil Platform from your laravel app.

### Requirements

PHP 5.2 and later.

### Download the SDK

https://github.com/Monetbil/monetbil-php/archive/master.zip

### Installation

#### Composer Installation
The best way to install monetbil is quickly and easily with [composer](https://getcomposer.org/).

To install the most recent version, run the following command.

```bash
composer require tchdev/monetbil
```

### Laravel

If you don't use auto-discovery, open up your app config and add the Service Provider to the `$providers` array:

 ```php
'providers' => [
    ...
    Propaganistas\LaravelPhone\PhoneServiceProvider::class,
],
```
and aliases to the `$aliases` array:
 ```php
'aliases' => [
    ...
    'Monetbil' => Tchdev\Monetbil\Facades\Monetbil::class,
],
```

Publish file with the command :
```bash
php artisan vendor:publish

 Which provider or tag's files would you like to publish?:
  [0 ] Publish files from all providers and tags listed below
  [1 ] Provider: Facade\Ignition\IgnitionServiceProvider
  [2 ] Provider: Fideloper\Proxy\TrustedProxyServiceProvider
  [3 ] Provider: Illuminate\Foundation\Providers\FoundationServiceProvider
  [4 ] Provider: Illuminate\Mail\MailServiceProvider
  [5 ] Provider: Illuminate\Notifications\NotificationServiceProvider
  [6 ] Provider: Illuminate\Pagination\PaginationServiceProvider
  [7 ] Provider: Laravel\Tinker\TinkerServiceProvider
  [8 ] Provider: Tchdev\Monetbil\MonetbilServiceProvider
  [9 ] Tag: flare-config
  [10] Tag: ignition-config
  [11] Tag: laravel-errors
  [12] Tag: laravel-mail
  [13] Tag: laravel-notifications
  [14] Tag: laravel-pagination
  [15] Tag: public
 > Enter the number of the package (Tchdev\Monetbil\MonetbilServiceProvider) and press "enter"


 Now go to your `.env` file and add this :
 ```php
MONETBIL_KEY=YOUR_MONETBIL_KEY
MONETBIL_SECRET=YOUR_MONEBIL_SECRET_KEY
MONETBIL_VERSION=YOUR_MONETBIL_VERSION
``` 
