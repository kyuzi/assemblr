<?php
use PHPUnit\Framework\TestCase;
use Assemblr\Memory\RAMMemory;


class RAMMemoryTest extends TestCase {
    public function testReadRAMData() {
        $mem = new RAMMemory($size = 5);
        $this->assertTrue($mem->readByte(2) === $mem->readByte(2));
    }

//    public function testROMWriteData() {
//        $this->expectException(Assemblr\Exception\ROMMemoryWriteException::class);
//
//        $mem = new ROMMemory($size= 10, $fill = 0);
//        $mem->writeByte(0, 1);
//    }
//
//    public function testAccessOutOfBounds() {
//        $this->expectException(\Assemblr\Exception\MemoryAccessOutOfBoundsException::class);
//
//        $mem = new ROMMemory($size = 1, $fill = 0);
//        $mem->readByte(1);
//    }
}
