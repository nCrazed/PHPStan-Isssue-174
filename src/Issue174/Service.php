<?php
declare(strict_types = 1);

namespace Issue174;


class Service
{

    /**
     * @var Dependency
     */
    private $dependency;

    public function __construct(Dependency $dependency)
    {
        $this->dependency = $dependency;
    }

    public function getDependency()
    {
        return $this->dependency;
    }

}