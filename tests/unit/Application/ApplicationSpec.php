<?php

namespace unit\Acme\Application;

use Acme\Support\Container\LeagueContainer;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ApplicationSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(__DIR__);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Acme\Application\Contract\Application');
    }

    function it_has_container()
    {
        $this->container()->shouldBe(LeagueContainer::instance());
    }

    function it_gets_the_base_path()
    {
        $this->basePath()->shouldBe(__DIR__);
    }

    function it_gets_the_bootstrap_path()
    {
        $this->bootPath()->shouldBe(__DIR__ . "/bootstrap");
    }

    function it_gets_the_config_path()
    {
        $this->configPath()->shouldBe(__DIR__ . "/config");
    }

    function it_gets_the_public_path()
    {
        $this->publicPath()->shouldBe(__DIR__ . "/public");
    }
}
