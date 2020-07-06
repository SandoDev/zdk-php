# ZDK Zinobe

ZDK for PHP of Zinobe API's

## Implement

```php
include __DIR__ . "/../vendor/autoload.php";

$client = new \zdk\ClientServices();
$api = $client->service("name_of_service");
$result = $api->method_of_service();
print_r($result);
```