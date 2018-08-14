<?php
namespace Assemblr\Memory;


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
            parent::writeByte($index, $fill);
        }
    }

    /**
     * Writing to ROM should panic the interpreter
     * @see Memory::writeByte()
     */
    public function writeByte(int $index, int $value)
    {
        return;
    }
}