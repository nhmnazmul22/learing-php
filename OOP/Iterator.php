<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iterator</title>
</head>

<body>

    <?php

    class MyIterator implements Iterator
    {
        public $items = [];
        public $pointer = 0;

        public function __construct($items)
        {
            $this->items = array_values($items);
        }

        public function current(): string
        {
            return $this->items[$this->pointer];
        }

        public function key(): int
        {
            return $this->pointer;
        }

        public function next(): void
        {
            $this->pointer++;
        }

        public function rewind(): void
        {
            $this->pointer = 0;
        }

        public function valid(): bool
        {
            return $this->pointer < count($this->items);
        }
    }

    function printIterator(iterable $myIterable)
    {
        foreach ($myIterable as $item) {
            echo $item;
        }
    }


    $iterator = new MyIterator(["a", "b", "c"]);
    printIterator($iterator);
    ?>







</body>

</html>