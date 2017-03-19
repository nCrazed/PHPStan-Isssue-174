<?php
declare(strict_types = 1);

namespace Testing\Issue174;


use Issue174\Dependency;
use Issue174\Service;
use Mockery\Mock;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{

    /**
     * @var Mock | Dependency
     */
    private $dependency;

    protected function setUp()
    {
        parent::setUp();

        $this->dependency = \Mockery::mock(Dependency::class);

        new Service($this->dependency);
    }

}