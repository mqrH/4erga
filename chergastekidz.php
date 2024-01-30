<?php

class QueueDataStorage
{
    public $storage = [];

    public function add($value)
    {
        $this->storage[] = $value;
    }
    public function get()
    {
        return array_pop($this->storage);
    }
    public function count()
    {
        return count($this->storage);
    }
    public function clear()
    {
        $this->storage = [];
    }
}


$storageNew = new QueueDataStorage;

$storageNew->add(1231);
$storageNew->add(42);
$storageNew->add(1256231);
$storageNew->add(8);



echo count($storageNew->storage) . PHP_EOL;
echo var_dump($storageNew) . PHP_EOL;

echo $storageNew->count() . PHP_EOL;
echo var_dump($storageNew) . PHP_EOL;

echo QueueDataStorage::class;

