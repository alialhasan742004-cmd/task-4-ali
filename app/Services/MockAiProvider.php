<?php

namespace App\Services;

use App\Contracts\AiProvider;

class MockAiProvider implements AiProvider
{
    public function enhanceImage(string $imagePath): array
    {
        return [
            'status' => 'success',
            'original' => $imagePath,
            'enhanced_url' => 'https://example.com/enhanced.jpg',
            'quality_score' => 98.5,
        ];
    }
}
