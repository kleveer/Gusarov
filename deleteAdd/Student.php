<?php
class Student extends User {
    private $group;
    
    public function __construct($name, $group) {
        parent::__construct($name);
        $this->group = $group;
    }
    
    public function getGroup() {
        return $this->group;
    }
    
    public function sayAboutMe() {
        echo "<strong>Студент:</strong> " . $this->getName() . "<br>";
        echo "Группа: " . $this->group . "<br><br>";
    }
}