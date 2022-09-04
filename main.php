<?php

require __DIR__ . '/vendor/autoload.php';

$tokenStore = new \Sdkgen\Client\TokenStore\MemoryTokenStore();
$scopes = ['backend'];

$client = new \Fusio\Sdk\Client('https://demo.fusio-project.org', 'test', 'FRsNh1zKCXlB', $scopes, $tokenStore);

$collection = $client->backend()->backendRoute()->getBackendRoutes()->backendActionRouteGetAll();

echo 'Routes:' . "\n";
foreach ($collection->getEntry() as $route) {
    echo '* ' . $route->getPath() . "\n";
}
