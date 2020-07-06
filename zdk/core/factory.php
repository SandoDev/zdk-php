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
        $pathService = '/../zinobe/' . $this->service . '/client.php';
        $path = getcwd();
        $filePath1 = $path . '/vendor/zinobe/zdk/' . 'zdk/zinobe/' . $this->service . '/client.php';
        if (file_exists($filePath1) or file_exists(substr_replace($pathService, 'zdk', 0, 3))) {
            require(__DIR__ . $pathService);
            $clientService = new Client();
            return $clientService;
        } else {
            $error = "El servicio '" . $this->service . "' no existe";
            throw new Exception($error);
        }
    }
}
