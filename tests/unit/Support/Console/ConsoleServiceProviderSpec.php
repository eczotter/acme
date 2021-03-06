<?php

namespace unit\Acme\Support\Console;

use Acme\Support\Config\Config;
use Acme\Support\Console\Console;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ConsoleServiceProviderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Acme\Support\Container\ServiceProvider');
    }
}
