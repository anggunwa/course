<?php

class MyIterator implements Iterator {
    private $items = [];
    private $pointer = 0;

    public function __construct($items) {
        $this->items = array_values($items);
    }

    public function current() {
        return $this->items[$this->pointer];
    }

    public function key() {
        return $this->pointer;
    }

    public function next() {
        $this->pointer++;
    }

    public function rewind() {
        $this->pointer = 0;
    }

    public function valid() {
        return $this->pointer < count($this->items);
    }
}

function printIterable(iterable $myIterable) {
    foreach ($myIterable as $item) {
        echo $item;
    }
}

$iterator = new MyIterator(["a", "b", "c", "d"]);
printIterable($iterator);

?>