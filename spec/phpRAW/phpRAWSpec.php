<?php

namespace spec\phpRAW;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class phpRAWSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('phpRAW\phpRAW');
    }

    function it_can_append_abc()
    {
        $this->appendAbc('Z')->shouldReturn('Zabc');
    }

    function it_can_get_reditor_link_karma()
    {
        $this->getRedditor('LowLanding')->data->link_karma->shouldReturn(16);
    }
}
