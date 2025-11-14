<?php

class User
{
    private $firstname;
    private $email;
    private $lastname;

    public function __construct($firstname, $email, $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname  = $lastname;
        $this->email     = $email;
    }

    public function GETNAME()
    {
        return $this->firstname;
    }

    public function GETLASTNAME()
    {
        return $this->lastname;
    }

    public function GETEMAIL()
    {
        return $this->email;
    }

    public function setname($newname)
    {
        if ($this->isNameCorrect($newname)) {
            $this->firstname = $newname;
            return true;
        } else {
            return false;
        }
    }

    public function setemail($email)
    {
        if ($this->isEmailCorrect($email)) {
            $this->email = $email;
            return true;
        } else {
            return false;
        }
    }

    public function setlastname($lastname)
    {
        if ($lastname) {
            $this->lastname = $lastname;
            return true;
        } else {
            return false;
        }
    }

    public function sayaboutme()
    {
        echo "Обновленная информация: " . $this->GETNAME() . " " . $this->GETLASTNAME() . ", email: " . $this->GETEMAIL();
    }

    private function isNameCorrect($name)
    {
        $length = mb_strlen($name);
        return $length > 0 && $length < 128;
    }

    private function isEmailCorrect($email)
    {
        $atPos  = strpos($email, "@");
        $dotPos = strpos($email, ".");
        if ($atPos !== false && $dotPos !== false && $atPos < $dotPos) {
            return true;
        } else {
            return false;
        }
    }
    private static $numberStudents;
    public static function getnumberStudents(){
        
    }
}

$user1 = new User("Marrar", "virgin@gmail.com", "alexnadrovich");
$user1->setname("xvhkiqq");
$user1->setemail("xvhkiqq@gmail.com");

$user2 = new User("lev", "lev@gmail.com", "ktmovich");
$user2->setname(""); 

?>

<p><?php $user1->sayaboutme(); ?></p>
<p><?php $user2->sayaboutme(); ?></p>
<p>Общая информация для пользователя 1: <?= $user1->GETNAME() . " " . $user1->GETLASTNAME() . ", email: " . $user1->GETEMAIL(); ?></p>
<p>Общая информация для пользователя 2: <?= $user2->GETNAME() . " " . $user2->GETLASTNAME() . ", email: " . $user2->GETEMAIL(); ?></p>

<?php

class Student extends User
{
    private $course;
    private $group;

    public function __construct($firstname, $email, $lastname, $course, $group)
    {
        parent::__construct($firstname, $email, $lastname);
        $this->course = $course;
        $this->group  = $group;
    }

    public function getcourse()
    {
        return $this->course;
    }

    public function getGroup()
    {
        return $this->group;
    }
    public function setCourse($course)
    {
        if ($course) {
            $this->course = $course;
            return true;
        } else {
            return false;
        }
    }

    public function setGroup($group)
    {
        if ($group) {
            $this->group = $group;
            return true;
        } else {
            return false;
        }
    }

    public function sayaboutme()
    {
        parent::sayaboutme(); 
        echo ", курс: " . $this->course . ", группа: " . $this->group;
    }
}

$student = new Student("marrat", "argunovmarrat@gmail.com", "alexandrovich", 2, "iv1k-24");

?>

<p><?php $student->sayaboutme(); ?></p>
<p>Студент: <?= $student->GETNAME() . " " . $student->GETLASTNAME() . ", email: " . $student->GETEMAIL() . ", курс: " . $student->getcourse() . ", группа: " . $student->getGroup(); ?></p>