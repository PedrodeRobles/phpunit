<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    public function test_email()
    {
        $result = validate_email('pedro@email.com');
        $this->assertTrue($result);

        $result = validate_email('pedro@@@@♠4@email.com');
        $this->assertFalse($result);
    }
}
