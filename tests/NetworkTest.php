<?php

class NetworkTest extends PHPUnit_Framework_TestCase {
    public function test_ping_succeeds() {
        $this->assertTrue(ping('8.8.8.8') > 0);
        $this->assertFalse(ping('192.168.222.222'));
    }
}
