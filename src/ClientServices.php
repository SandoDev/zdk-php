<?php

namespace Zinobe\Zdk;

use \Exception;
use Zinobe\Zdk\Core\Factory;

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
        try {
            $instance = new Factory($service);
            return $instance->getInstance();
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
            exit(1);
        }
    }
}
