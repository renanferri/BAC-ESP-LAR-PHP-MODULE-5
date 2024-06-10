<?php

namespace Beerandcode\Modulo5\Base;

use Psr\Container\ContainerInterface;
use ReflectionClass;

class ContainerPrint implements ContainerInterface
{
    protected array $services = [];

    public function get(string $id) : mixed
    {
        echo "get id: {$id} \n";
        $service = $this->resolve($id);

        return $this->getInstance($service);
    }

    public function has(string $id) : bool
    {
        echo "has id: {$id} \n";
        return array_key_exists($id, $this->services);
    }

    private function resolve(string $key) : ReflectionClass
    {
        echo "resolve key: {$key} \n";

        if ($this->has($key)) {

            echo "resolve has exists: {$key} \n";

            $service = $this->services[$key];

            if (is_callable($service)) {

                echo "is_callable \n";

                return $service();
            }

            return $service;
        }

        if (empty($this->services)) {
            echo "vazio \n";

            print_r($this->services);

            echo "\n";
        }

        $this->services[$key] = new ReflectionClass($key);

        echo "has array services \n";

        //print_r($this->services);

        echo "\n";

        return $this->services[$key];
    }

    private function getInstance(ReflectionClass $service)
    {
        echo "getInstance service: {$service->getName()} \n";

        $constructor = $service->getConstructor();

        if (is_null($constructor) || $constructor->getNumberOfRequiredParameters() === 0) {

            echo "sem construtor \n";

            echo $service->getName();

            echo "\n";

            return $service->newInstance();
        }

        echo "meio \n";

        $params = [];

        print_r($params);

        echo "\n";

        foreach ($constructor->getParameters() as $parameter) {
            if ($paramType = $parameter->getType()) {
                $params[] = $this->get($paramType->getName());
            }
        }



        echo "\n";

        echo $service->getName();

        echo "\n";

        echo "pre fim \n";

        //print_r($this->services);

        echo "\n";


        echo "fim \n";

        echo "params \n";

        print_r($params);


        return $service->newInstanceArgs($params);
    }
}
