<?php

namespace Beerandcode\Modulo5\Base;


class Facade
{
    public static function __callStatic($method, $arguments)
    {
        $container = Container::getContainer();

        $service = $container->get(static::getFacadeAcessor());

        return $service->$method(... $arguments);
    }

    protected static function getFacadeAcessor() : string
    {
        return '';
    }
}


