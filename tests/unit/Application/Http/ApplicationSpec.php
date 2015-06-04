<?php

namespace unit\Acme\Application\Http;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ApplicationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Acme\Support\Contract\Application');
        $this->shouldHaveType('Acme\Application\Application');
    }
}
