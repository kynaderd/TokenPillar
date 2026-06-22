<?php
/**
 * Tests for TokenPillar
 */

use PHPUnit\Framework\TestCase;
use Tokenpillar\Tokenpillar;

class TokenpillarTest extends TestCase {
    private Tokenpillar $instance;

    protected function setUp(): void {
        $this->instance = new Tokenpillar(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tokenpillar::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
