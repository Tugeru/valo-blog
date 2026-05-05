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
        $response->assertSee('DUELIST');
        $response->assertSee('UPDRAFT');
        $response->assertSee('TAILWIND');
        $response->assertSee('CLOUDBURST');
        $response->assertSee('BLADE STORM');
    }
}
