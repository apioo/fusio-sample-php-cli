
Fusio PHP CLI sample
=====

# About

This is a simple PHP CLI application which shows how to use the PHP SDK to access a Fusio instance.
In this example we simply output all registered routes.
Fusio is an open source API management which helps to build and manage great APIs more information at:
https://www.fusio-project.org/

```php
<?php

require __DIR__ . '/vendor/autoload.php';

$tokenStore = new \Sdkgen\Client\TokenStore\MemoryTokenStore();
$scopes = ['backend'];

$client = new \Fusio\Sdk\Client('https://demo.fusio-project.org', 'test', 'FRsNh1zKCXlB', $scopes, $tokenStore);

$collection = $client->backend()->operation()->getAll(0, 16, '');

echo 'Operations:' . "\n";
foreach ($collection->getEntry() as $operation) {
    echo '* ' . $operation->getHttpMethod() . ' ' . $operation->getHttpPath() . "\n";
}

```

# Usage

To run this app simply execute following command:

```
composer install
php main.php
```
