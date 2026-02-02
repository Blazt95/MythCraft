<?php
/**
 * Tests for MythCraft
 */

use PHPUnit\Framework\TestCase;
use Mythcraft\Mythcraft;

class MythcraftTest extends TestCase {
    private Mythcraft $instance;

    protected function setUp(): void {
        $this->instance = new Mythcraft(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Mythcraft::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
