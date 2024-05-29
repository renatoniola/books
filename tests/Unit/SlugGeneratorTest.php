<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\UtilsService;

class SlugGeneratorTest extends TestCase
{
    /**
     * Tests the slug generator.
     */
    public function test_that_the_generated_slug_is_eual_to(): void
    {
        $result = UtilsService::generateSlug(1245, 'il fu mattia pascal');
        $expected = '1245.il-fu-mattia-pascal';

        $this->assertSame($expected, $result);
    }
}
