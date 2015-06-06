<?php

namespace unit\Acme\Support\Container;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LeagueContainerSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedThrough('instance', []);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Acme\Support\Container\Container');
    }

    function it_is_a_singleton()
    {
        $this->instance()->shouldBe($this);
    }

    function it_gets_itself()
    {
        $this->get('container')->shouldBe($this);
    }
}
