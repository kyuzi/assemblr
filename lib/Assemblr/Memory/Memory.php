<?php
namespace Assemblr\Memory;


abstract class Memory
{
    /**
     * @var integer Amount of bytes that can be accessed
     */
    private $size;

    /**
     * @var array Array of bytes with a length of $size
     */
    private $data;

    /**
     * @param int $size Size of memory
     */
    public function __construct(int $size)
    {
        $this->size = $size;
        $this->data = array();
    }

    /**
     * @return int Gets the size of memory;
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $index Address of byte you want to read
     * @return int Byte in the given address
     */
    public function readByte(int $index): int
    {
        return 0;
    }

    /**
     * @param int $index Address of byte you want to write to
     * @param int $value Value (0x00 - 0xFF) you want to write
     */
    public function writeByte(int $index, int $value)
    {
        return;
    }
};