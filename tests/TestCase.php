<?php

namespace MadWeb\Robots\Test;

use MadWeb\Robots\RobotsFacade;
use Illuminate\Container\Container;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /** @return \MadWeb\Robots\Robots */
    protected function getRobotsService()
    {
        return Container::getInstance()->make('robots');
    }

    protected function getPackageProviders($app)
    {
        return [\MadWeb\Robots\RobotsServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Robots' => RobotsFacade::class,
        ];
    }
}
