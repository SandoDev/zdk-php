# ZDK Zinobe

ZDK for PHP of Zinobe API's

**See the official documentation [here](https://hackmd.zinobe.com/s/yFyfhJB5q)**

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
include __DIR__ . "/vendor/autoload.php";

use Zinobe\Zdk\ClientServices;

$client = new ClientServices();
$api = $client->service("zevents");
$postdata = '{"identity":"1032498297"}';
$result = $api->download_profile($postdata);
print_r($result);
```