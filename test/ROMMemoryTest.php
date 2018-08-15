<?php
use PHPUnit\Framework\TestCase;
use Assemblr\Memory\ROMMemory;


class ROMMemoryTest extends TestCase {
    public function testReadROMData() {
        $mem = new ROMMemory($size = 5, $fill = 2);
        $this->assertTrue($mem->readByte(2) === 2);
    }

    public function testROMWriteData() {
        $this->expectException(Assemblr\Exception\ROMMemoryWriteException::class);

        $mem = new ROMMemory($size= 10, $fill = 0);
        $mem->writeByte(0, 1);
    }

    public function testAccessOutOfBounds() {
        $this->expectException(\Assemblr\Exception\MemoryAccessOutOfBoundsException::class);

        $mem = new ROMMemory($size = 1, $fill = 0);
        $mem->readByte(1);
    }
}
