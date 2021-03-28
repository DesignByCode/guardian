<?php

namespace DesignByCode\Guardian\Tests\Unit;

use DesignByCode\Guardian\Tests\TestCase;

class AvatarTest extends TestCase
{
    /** @test */
    public function can_get_gravatar()
    {
        $this->assertEquals(
            auth()->user()->gravatar,
            'https://secure.gravatar.com/avatar/241ca07c36641645ad6a8d1e760d441b?s=100&background=ed143d'
        );
    }
}
