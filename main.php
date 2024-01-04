<?php

require __DIR__ . '/vendor/autoload.php';

$tokenStore = new \Sdkgen\Client\TokenStore\MemoryTokenStore();
$scopes = ['backend'];

$credentials = new \Sdkgen\Client\Credentials\OAuth2('test', 'FRsNh1zKCXlB', 'https://demo.fusio-project.org/authorization/token', '', $tokenStore, $scopes);
$client = new \Fusio\Sdk\Client('https://demo.fusio-project.org', $credentials);

$collection = $client->backend()->operation()->getAll(0, 16, '');

echo 'Operations:' . "\n";
foreach ($collection->getEntry() as $operation) {
    echo '* ' . $operation->getHttpMethod() . ' ' . $operation->getHttpPath() . "\n";
}
