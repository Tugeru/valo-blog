<?php

namespace App\Services;

class MetaStatsService
{
    public function getStats(): array
    {
        $path = database_path('data/meta-stats.json');
        if (!file_exists($path)) {
            return [];
        }
        return json_decode(file_get_contents($path), true) ?? [];
    }
}
