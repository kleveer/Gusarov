<?php
class Teacher extends User {
    private $subjects; 
    
    public function __construct($name, $subjects) {
        parent::__construct($name);
        $this->subjects = $subjects;
    }
    
    public function sayAboutMe() {
        echo "<strong>Преподаватель:</strong> " . $this->getName() . "<br>";
        

        if (is_array($this->subjects)) {
            echo "Предметы: " . implode(", ", $this->subjects) . "<br><br>";
        } else {
            echo "Предмет: " . $this->subjects . "<br><br>";
        }
    }
}
