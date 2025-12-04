<?php
class Manager extends User {
    private $position;
    
    public function __construct($name, $position) {
        parent::__construct($name);
        $this->position = $position;
    }
    
    public function sayAboutMe() {
        echo "<strong>Менеджер:</strong> " . $this->getName() . "<br>";
        echo "Должность: " . $this->position . "<br><br>";
    }
}