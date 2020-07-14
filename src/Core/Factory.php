<?php

namespace Zinobe\Zdk\Core;

use Exception;
use Zinobe\Zdk\Zinobe\Zevents\Client;

class Factory
{
    private $service;

    public function __construct($service)
    {
        $this->service = $service;
    }

    public function getInstance()
    {
        $filePath = __DIR__ . '/../Zinobe/' . \ucwords($this->service) . '/Client.php';

        $loadClass = 'Zinobe\Zdk\Zinobe\\' . \ucwords($this->service) . '\Client';

        if (file_exists($filePath)) {
            $clientService = new $loadClass();
            return $clientService;
        } else {
            $error = "El servicio '" . $this->service . "' no existe";
            throw new Exception($error);
        }
    }
}
