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
 ```

 Now go to your `.env` file and add this :
 ```php
MONETBIL_KEY=YOUR_MONETBIL_KEY
MONETBIL_SECRET=YOUR_MONEBIL_SECRET_KEY
MONETBIL_VERSION=YOUR_MONETBIL_VERSION
``` 
### Payment Widget Usage

#### Example 1

```php
<?php

use Tchdev\Monetbil\Facades\Monetbil;
// Setup Monetbil arguments
Monetbil::setAmount(500);
Monetbil::setCurrency('XAF');
Monetbil::setLocale('en'); // Display language fr or en
Monetbil::setPhone('');
Monetbil::setCountry('');
Monetbil::setItem_ref('2536');
Monetbil::setPayment_ref(md5(uniqid()));
Monetbil::setUser(12);
Monetbil::setFirst_name('KAMDEM');
Monetbil::setLast_name('Jean');
Monetbil::setEmail('jean.kamdem@email.com');
Monetbil::setReturn_url('your_redirect_url_after_payment');
Monetbil::setNotify_url('your_notification_url_to_receive_payment_data');
Monetbil::setLogo('https://storage.googleapis.com/cdn.ucraft.me/userFiles/ukuthulamovies/images/937-your-logo.png');

// Start a payment
// You will be redirected to the payment page
Monetbil::startPayment();

```

#### Or example 2

```php
<?php

use Tchdev\Monetbil\Facades\Monetbil;

// Setup Monetbil arguments
$monetbil_args = array(
    'amount' => 500,
    'phone' => '',
    'locale' => 'en', // Display language fr or en
    'country' => '',
    'currency' => 'XAF',
    'item_ref' => '2536',
    'payment_ref' => md5(uniqid()),
    'user' => 12,
    'first_name' => 'KAMDEM',
    'last_name' => 'Jean',
    'email' => 'jean.kamdem@email.com',
    'return_url' => 'your_redirect_url_after_payment',
    'notify_url' => 'your_notification_url_to_receive_payment_data',
    'logo' => 'https://storage.googleapis.com/cdn.ucraft.me/userFiles/ukuthulamovies/images/937-your-logo.png'
);

// Start a payment
// You will be redirected to the payment page
Monetbil::startPayment($monetbil_args);

```

### You can get the payment url.

*Example 3:*

```php
<?php

use Tchdev\Monetbil\Facades\Monetbil;

// Setup Monetbil arguments
Monetbil::setAmount(500);
Monetbil::setCurrency('XAF');
Monetbil::setLocale('en'); // Display language fr or en
Monetbil::setPhone('');
Monetbil::setCountry('');
Monetbil::setItem_ref('2536');
Monetbil::setPayment_ref(md5(uniqid()));
Monetbil::setUser(12);
Monetbil::setFirst_name('KAMDEM');
Monetbil::setLast_name('Jean');
Monetbil::setEmail('jean.kamdem@email.com');
Monetbil::setReturn_url('your_redirect_url_after_payment');
Monetbil::setNotify_url('your_notification_url_to_receive_payment_data');
Monetbil::setLogo('https://storage.googleapis.com/cdn.ucraft.me/userFiles/ukuthulamovies/images/937-your-logo.png');

// This example show payment url
echo Monetbil::url();

```

*Or example 4:*

```php
<?php

use Tchdev\Monetbil\Facades\Monetbil;

// Setup Monetbil arguments
$monetbil_args = array(
    'amount' => 500,
    'phone' => '',
    'locale' => 'en', // Display language fr or en
    'country' => '',
    'currency' => 'XAF',
    'item_ref' => '2536',
    'payment_ref' => md5(uniqid()),
    'user' => 12,
    'first_name' => 'KAMDEM',
    'last_name' => 'Jean',
    'email' => 'jean.kamdem@email.com',
    'return_url' => 'your_redirect_url_after_payment',
    'notify_url' => 'your_notification_url_to_receive_payment_data',
    'logo' => 'https://storage.googleapis.com/cdn.ucraft.me/userFiles/ukuthulamovies/images/937-your-logo.png'
);
);

// This example show payment url
echo Monetbil::url($monetbil_args);

```

*Example 3 and 4 response::*

```html
https://www.monetbil.com/pay/v2.1/UXaJoEvDiVBrQX9p9FGoFanlmp6t3H

```

### You can integrate the payment widget on your own page.

*Example 5:*

```php
<?php

use Tchdev\Monetbil\Facades\Monetbil;

// Setup Monetbil arguments
Monetbil::setAmount(500);
Monetbil::setCurrency('XAF');
Monetbil::setLocale('en'); // Display language fr or en
Monetbil::setPhone('');
Monetbil::setCountry('');
Monetbil::setItem_ref('2536');
Monetbil::setPayment_ref(md5(uniqid()));
Monetbil::setUser(12);
Monetbil::setFirst_name('KAMDEM');
Monetbil::setLast_name('Jean');
Monetbil::setEmail('jean.kamdem@email.com');
Monetbil::setReturn_url('your_redirect_url_after_payment');
Monetbil::setNotify_url('your_notification_url_to_receive_payment_data');
Monetbil::setLogo('https://storage.googleapis.com/cdn.ucraft.me/userFiles/ukuthulamovies/images/937-your-logo.png');

// This example show payment button
$payment_url = Monetbil::url();
?>
<style type="text/css">
    .btnmnb {
        background: #3498db;
        background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
        background-image: -moz-linear-gradient(top, #3498db, #2980b9);
        background-image: -ms-linear-gradient(top, #3498db, #2980b9);
        background-image: -o-linear-gradient(top, #3498db, #2980b9);
        background-image: linear-gradient(to bottom, #3498db, #2980b9);
        font-family: Arial;
        color: #ffffff;
        font-size: 20px;
        padding: 10px 20px 10px 20px;
        text-decoration: none;
        cursor: pointer;
    }

    .btnmnb:hover {
        background: #3cb0fd;
        background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
        background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
        background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
        background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
        background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
        text-decoration: none;
    }
</style>

<?php if (Monetbil::MONETBIL_WIDGET_VERSION_V2 == Monetbil::getWidgetVersion()): ?>
    <form action="<?php echo $payment_url; ?>" method="post" data-monetbil="form">
        <button type="submit" class="btnmnb" id="monetbil-payment-widget">Pay By Mobile Money</button>
    </form>
<?php else : ?>
    <a class="btnmnb" href="<?php echo $payment_url; ?>" id="monetbil-payment-widget">Pay By Mobile Money</a>
<?php endif; ?>

<!-- To open widget, add JS files -->
<?php echo Monetbil::js(); ?>

<!-- To auto open widget, add JS files -->
<?php echo Monetbil::js(true); ?>

```
If you have any questions or need help, do not hesitate to contact us at [ramostchambia@gmail.com](https://devblog.realofdreams.com/)
