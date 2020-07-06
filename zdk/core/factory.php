<?php
class Factory
{
    private $service;

    function __construct($service)
    {
        $this->service = $service;
    }

    public function getInstance()
    {
        //importar la clase client de servicio especifico
        //devolver una instancia de la clase
        $pathService = '/../zinobe/' . $this->service . '/client.php';
        //print_r($pathService);
        //echo PHP_EOL;
        if (file_exists(substr_replace($pathService, 'zdk', 0, 3))) {
            include(__DIR__ . $pathService);
            $clientService = new Client();
            return $clientService;
        } else {
            $error = "El servicio '" . $this->service . "' no existe";
            throw new Exception($error);
        }
    }
}
