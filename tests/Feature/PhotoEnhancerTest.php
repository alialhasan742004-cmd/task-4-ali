<?php

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;
use App\Services\PhotoEnhancer;
use App\Services\MockAiProvider;

class PhotoEnhancerTest extends TestCase
{
    public function test_enhancement_returns_array()
    {
        $provider = new MockAiProvider();
        $enhancer = new PhotoEnhancer($provider);
        $result = $enhancer->process('test.jpg');

        $this->assertIsArray($result);
        $this->assertEquals('success', $result['status']);
    }
}
