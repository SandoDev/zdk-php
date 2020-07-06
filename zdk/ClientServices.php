<?php

namespace zdk;

use Exception;
use Factory;

class ClientServices
{
    /**
     * Crea un nuevo cliente para un servicio específico
     *
     *
     * @access public
     * @param string $service nombre del servicio a instanciar
     * @return instance instancia del servicio
     */
    public function service($service)
    {
        include(__DIR__ . '/../zdk/core/factory.php');
        try {
            $instance = new Factory($service);
            return $instance->getInstance();
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
            exit(1);
        }
    }
}
