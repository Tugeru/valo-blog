<?php

namespace Tests\Unit;

use App\Services\MetaStatsService;
use Tests\TestCase;

class MetaStatsServiceTest extends TestCase
{
    public function test_it_loads_stats_from_json()
    {
        $service = new MetaStatsService();
        $stats = $service->getStats();

        $this->assertIsArray($stats);
        $this->assertEquals('12.08', $stats['current_patch']);
    }
}
