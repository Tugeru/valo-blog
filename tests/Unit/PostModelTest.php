<?php

namespace Tests\Unit;

use App\Models\Post;
use Tests\TestCase;

class PostModelTest extends TestCase
{
    public function test_rendered_content_accessor_returns_html(): void
    {
        $post = new Post(['content' => '## Hello World']);
        
        $this->assertEquals("<h2>Hello World</h2>\n", $post->rendered_content);
    }
}
