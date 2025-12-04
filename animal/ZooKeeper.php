<?php
class ZooKeeper {
    private $name;
    private $animals = [];
    public function addAnimal($animal) {
        $this->animals[] = $animal;
    }
}