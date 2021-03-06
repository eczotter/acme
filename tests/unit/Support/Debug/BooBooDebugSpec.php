<?php

namespace unit\Acme\Support\Debug;

use Acme\Support\Container\Container;
use League\BooBoo\Handler\HandlerInterface;
use League\BooBoo\Handler\LogHandler;
use League\BooBoo\Runner;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BooBooDebugSpec extends ObjectBehavior
{
    function let(Container $container, Runner $booboo, LogHandler $log)
    {
        $this->beConstructedWith($container, $booboo, $log);
    }

    function it_is_initializable(Runner $booboo)
    {
        $this->shouldHaveType('Acme\Support\Debug\Debug');
        $this->shouldHaveType('League\BooBoo\Handler\HandlerInterface');
        $booboo->pushHandler($this)->shouldHaveBeenCalled();
        $booboo->treatErrorsAsExceptions(true)->shouldHaveBeenCalled();
    }

    function it_registers_itself(Runner $booboo)
    {
        $this->register();
        $booboo->register()->shouldHaveBeenCalled();
    }

    function it_adds_an_exception_handler(
        Container $container,
        \Exception $exception,
        HandlerInterface $handler,
        LogHandler $log
    )
    {
        $container->get(HandlerInterface::class)->willReturn($handler);

        $this->handler(\Exception::class, HandlerInterface::class);
        $this->handle($exception);

        $handler->handle($exception)->shouldHaveBeenCalled();
        $log->handle($exception)->shouldHaveBeenCalled();
    }
}
