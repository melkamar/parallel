<?php

namespace Amp\Parallel\Sync\Internal;

class ParcelStorage extends \Threaded {
    /** @var mixed */
    private $value;

    /**
     * @param mixed $value
     */
    public function __construct($value) {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function get() {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function set($value) {
        $this->value = $value;
    }
}