# ZDK Zinobe

ZDK for PHP of Zinobe API's

## Quick Start

### Instalation

1. Download and install composer [here](https://getcomposer.org/download/)
2. initialize composer in your project

```sh
composer init
```

3. Install ZDK

```sh
composer require zinobe/zdk
```

### Implement

```php
include __DIR__ . "/../vendor/autoload.php";

$client = new \zdk\ClientServices();
$api = $client->service("name_of_service");
$result = $api->method_of_service();
print_r($result);
```