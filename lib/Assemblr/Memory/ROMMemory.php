<?php
namespace Assemblr\Memory;

use Assemblr\Exception\MemoryAccessOutOfBoundsException;
use Assemblr\Exception\ROMMemoryWriteException;


class ROMMemory extends Memory {
    /**
     * ROMMemory constructor.
     * @param int $size Size of ROM
     * @param int $fill Fill ROM with byte
     */
    public function __construct(int $size, int $fill = 0)
    {
        parent::__construct($size);

        for ($index = 0; $index < $this->getSize(); $index++) {
            $this->data[$index] = $fill;
        }
    }

    /**
     * @param int $index
     * @return int
     * @throws MemoryAccessOutOfBoundsException
     */
    public function readByte(int $index): int
    {
        if (0 <= $index && $index < $this->getSize()) {
            return $this->data[$index];
        }

        throw new MemoryAccessOutOfBoundsException();
    }

    /**
     * Writing to ROM should panic the interpreter
     * @see Memory::writeByte()
     * @throws ROMMemoryWriteException
     */
    public function writeByte(int $index, int $value)
    {
        throw new ROMMemoryWriteException();
    }
}