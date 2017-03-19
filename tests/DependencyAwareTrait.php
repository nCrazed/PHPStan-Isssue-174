<?php
declare(strict_types = 1);

namespace Testing\Issue174;

use Issue174\Dependency;
use Issue174\Service;
use Mockery\Mock;

trait DependencyAwareTrait
{

    /**
     * @var Mock | Dependency
     */
    private $dependency;

    public function setUp()
    {
        parent::setUp();
        $this->dependency = \Mockery::mock(Dependency::class);

        new Service($this->dependency);
    }

}