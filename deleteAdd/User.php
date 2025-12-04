<?php
class User {
    private $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function setName($newName) {
        if ($newName) {
            $this->name = $newName;
            return true;
        }
        return false;
    }
}