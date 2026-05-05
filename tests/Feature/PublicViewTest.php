<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PublicViewTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage_shows_posts(): void
    {
        $post = Post::factory()->create([
            'title' => 'Meta Update 2.0',
        ]);

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Meta Update 2.0');
        $response->assertSee('RADIANT INTEL');
    }

    public function test_post_detail_page_shows_content(): void
    {
        $post = Post::factory()->create([
            'title' => 'Unique Title',
            'content' => 'Full tactical intel content.',
        ]);

        $response = $this->get("/posts/{$post->id}");

        $response->assertStatus(200);
        $response->assertSee('Unique Title');
        $response->assertSee('Full tactical intel content.');
    }
}
