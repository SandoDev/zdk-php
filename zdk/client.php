<?php

include_once(__DIR__ . '/../zdk/core/factory.php');

/**
 * Crea un nuevo cliente para un servicio específico
 *
 *
 * @access public
 * @param string $service nombre del servicio a instanciar
 * @return instancia del servicio
 */
function client($service)
{
    try {
        $instance = new Factory($service);
        return $instance->getInstance();
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
        exit(1);
    }
}
