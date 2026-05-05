<?php

namespace Tests\Unit;

use App\Services\MarkdownService;
use PHPUnit\Framework\TestCase;

class MarkdownServiceTest extends TestCase
{
    public function test_it_converts_markdown_to_html(): void
    {
        $service = new MarkdownService();
        $markdown = "## Tactical Update\n- Buff Sage\n- Nerf Jett";
        $html = $service->toHtml($markdown);

        $this->assertStringContainsString('<h2>Tactical Update</h2>', $html);
        $this->assertStringContainsString('<ul>', $html);
        $this->assertStringContainsString('<li>Buff Sage</li>', $html);
    }

    public function test_it_strips_dangerous_html(): void
    {
        $service = new MarkdownService();
        $markdown = "<script>alert('hack')</script> **Bold**";
        $html = $service->toHtml($markdown);

        $this->assertStringNotContainsString('<script>', $html);
        $this->assertStringContainsString('<strong>Bold</strong>', $html);
    }
}
