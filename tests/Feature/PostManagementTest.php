<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class PostManagementTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Storage::fake('public');
        $this->withoutMiddleware(\Illuminate\Foundation\Http\Middleware\ValidateCsrfToken::class);
    }

    public function test_admin_can_view_dashboard(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/admin/dashboard');

        $response->assertStatus(200);
        $response->assertSee('COMMAND CENTER');
    }

    public function test_admin_can_create_post(): void
    {
        $user = User::factory()->create();
        // Use create() instead of image() to avoid GD dependency
        $image = UploadedFile::fake()->create('hero.jpg', 100);

        $response = $this->actingAs($user)->post('/admin/posts', [
            'title' => 'New Agent Released',
            'excerpt' => 'A short excerpt about the new agent.',
            'content' => 'The full content of the post goes here.',
            'image' => $image,
        ]);

        $response->assertRedirect('/admin/dashboard');
        $this->assertDatabaseHas('posts', [
            'title' => 'New Agent Released',
        ]);
        
        Storage::disk('public')->assertExists('posts/' . $image->hashName());
    }

    public function test_admin_can_edit_post(): void
    {
        $user = User::factory()->create();
        $post = Post::factory()->create([
            'image_path' => 'posts/old.jpg'
        ]);

        $response = $this->actingAs($user)->put("/admin/posts/{$post->id}", [
            'title' => 'Updated Title',
            'excerpt' => 'Updated excerpt.',
            'content' => 'Updated content.',
        ]);

        $response->assertRedirect('/admin/dashboard');
        $this->assertDatabaseHas('posts', [
            'id' => $post->id,
            'title' => 'Updated Title',
        ]);
    }

    public function test_admin_can_delete_post(): void
    {
        $user = User::factory()->create();
        $post = Post::factory()->create([
            'image_path' => 'posts/to-delete.jpg'
        ]);

        $response = $this->actingAs($user)->delete("/admin/posts/{$post->id}");

        $response->assertRedirect('/admin/dashboard');
        $this->assertDatabaseMissing('posts', [
            'id' => $post->id,
        ]);
    }
}
