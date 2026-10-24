<?php

namespace App\Contracts;

interface AiProvider
{
    public function enhanceImage(string $imagePath): array;
}
