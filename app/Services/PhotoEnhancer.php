<?php

namespace App\Services;

use App\Contracts\AiProvider;

class PhotoEnhancer
{
    protected AiProvider $aiProvider;

    public function __construct(AiProvider $aiProvider)
    {
        $this->aiProvider = $aiProvider;
    }

    public function process(string $imagePath): array
    {
        return $this->aiProvider->enhanceImage($imagePath);
    }
}
