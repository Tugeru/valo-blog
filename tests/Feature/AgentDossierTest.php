<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AgentDossierTest extends TestCase
{
    /** @test */
    public function it_can_view_jett_dossier()
    {
        $response = $this->get('/agents/jett');

        $response->assertStatus(200);
        $response->assertSee('Jett');
        $response->assertSee('Duelist');
        $response->assertSee('Updraft');
        $response->assertSee('Tailwind');
        $response->assertSee('Cloudburst');
        $response->assertSee('Blade Storm');
    }
}
