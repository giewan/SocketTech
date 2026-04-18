<?php
/**
 * Tests for SocketTech
 */

use PHPUnit\Framework\TestCase;
use Sockettech\Sockettech;

class SockettechTest extends TestCase {
    private Sockettech $instance;

    protected function setUp(): void {
        $this->instance = new Sockettech(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Sockettech::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
