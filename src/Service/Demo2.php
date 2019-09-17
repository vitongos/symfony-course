<?php declare(strict_types=1);

namespace App\Service;

/**
 * Solo quiero probar el procesador de variables de entorno
 */
class Demo2
{
    public function getIntegerEnv(int $parameter): int
    {
        return $parameter;
    }
}