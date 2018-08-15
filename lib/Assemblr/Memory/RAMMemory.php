<?php
namespace  Assemblr\Memory;


use Assemblr\Exception\MemoryAccessOutOfBoundsException;


class RAMMemory extends Memory {
    public function __construct(int $size)
    {
        parent::__construct($size);

        $count = 0;
        while ($count < $size) {
            $current_count = 4096;

            if ($size - $count < $current_count) {
                $current_count = $size - $count;
            }

            $data = random_bytes($current_count);

            for ($i = 0; $i <  $current_count; $i++) {
                $this->data[$count + $i] = ord($data[$i]);
            }

            $count += $current_count;
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
}