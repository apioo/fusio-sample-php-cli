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
