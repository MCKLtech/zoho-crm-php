# zoho-php

PHP bindings to the Zoho CRM API

## Installation

This library requires PHP 7.4 and later

The recommended way to install is through [Composer](https://getcomposer.org)

This library is intended to speed up development time but is not a shortcut to reading the Zoho CRM API documentation. Many endpoints require specific and required fields for successful operation. Always read the documentation before using an endpoint.

```sh
composer require mckltech/zoho-crm-php
```

## Clients - API Key 

Initialize your client using your access token:

```php
use Zoho\ZohoClient;

$client = new ZohoClient('ACCESS_TOKEN');
```

> - The access token is expected to be an API key or a success OAuth flow token. Remember, Zoho makes use of country codes and you may need to supply the correct country code to use the correct server address.


## Support, Issues & Bugs

This library is unofficial and is not endorsed or supported by Zoho CRM.

For bugs and issues, open an issue in this repo and feel free to submit a PR. Any issues that do not contain full logs or explanations will be closed. We need you to help us help you!

## API Versions

This library is intended to work with the Zoho CRM API as published in June 2021.

## Contacts

```php

use Zoho\ZohoClient;

$client = new ZohoClient('ACCESS_TOKEN');

/** List Contacts */
$client->records->list('Contacts');

/** Retrieve a Contact by their Record ID */
$client->records->get('Contacts', 12345);

/** Create A Contact */
$client->records->upsert('Contacts', ['Email' => 'example@zoho.com', 'First_Name' => 'John', 'Last_Name' => 'Doe']);

/** Search Contacts by Email */
$client->records->search('Contacts', ['email' => 'example@zoho.com']);

```

## Supported Endpoints

Please ensure you read the Zoho API documentation prior to use as there are numerous required fields for most POST/PUT/PATCH operations.

- Notes
- Records

## Exceptions

Exceptions are handled by HTTPlug. Every exception thrown implements `Http\Client\Exception`. See the [http client exceptions](http://docs.php-http.org/en/latest/httplug/exceptions.html) and the [client and server errors](http://docs.php-http.org/en/latest/plugins/error.html). If you want to catch errors you can wrap your API call into a try/catch block:

```php
try {
    $users = $client->users->list();
} catch(Http\Client\Exception $e) {
    if ($e->getCode() == '404') {
        // Handle 404 error
        return;
    } else {
        throw $e;
    }
}
```

## Credit

The layout and methodology used in this library is courtesy of https://github.com/intercom/intercom-php


