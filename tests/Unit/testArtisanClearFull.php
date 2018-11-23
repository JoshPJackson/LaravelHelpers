<?php

namespace Tests\Unit;

use Illuminate\Foundation\Console\ClearCompiledCommand;
use Illuminate\Foundation\Console\ConfigClearCommand;
use Illuminate\Foundation\Console\ViewClearCommand;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class testArtisanClearFull extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $mockConfigClearCommand = $this->createPartialMock(ConfigClearCommand::class, ['handler']);

        $mockConfigClearCommand->method('handler')->withAnyParameters()->willReturn([
        ]);

        $this->createPartialMock(ViewClearCommand::class, ['handler']);
        $this->createPartialMock(ClearCompiledCommand::class, ['handler']);
        $this->artisan('clear:full')
            ->
    }
}
