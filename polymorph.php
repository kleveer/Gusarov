<?php

class User
{
    protected string $name;
    protected string $email;

    public function __construct($name, $email)
    {
        $this->name  = $name;
        $this->email = $email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function sayAboutMe(): void
    {
        echo "Имя: {$this->name}<br>";
        echo "Email: {$this->email}<br>";
        echo "Тип: Пользователь<br><br>";
    }
}

class Teacher extends User
{
    protected $subjects = [];

    public function __construct($name, $email, $subjects = [])
    {
        parent::__construct($name, $email);
        $this->subjects = $subjects;
    }

    public function sayAboutMe(): void
    {
        echo "Имя: {$this->name}<br>";
        echo "Email: {$this->email}<br>";
        echo "Тип: Преподаватель<br>";
        echo "Предметы: " . implode(", ", $this->subjects) . "<br><br>";
    }
}

class Student extends User
{
    protected $group;

    public function __construct($name, $email, $group)
    {
        parent::__construct($name, $email);
        $this->group = $group;
    }

    public function sayAboutMe(): void
    {
        echo "Имя: {$this->name}<br>";
        echo "Email: {$this->email}<br>";
        echo "Тип: Студент<br>";
        echo "Группа: {$this->group}<br><br>";
    }
}

class Admin extends User
{
    protected $role;

    public function __construct($name, $email, $role)
    {
        parent::__construct($name, $email);
        $this->role = $role;
    }

    public function sayAboutMe(): void
    {
        echo "Имя: {$this->name}<br>";
        echo "Email: {$this->email}<br>";
        echo "Тип: Администрация<br>";
        echo "Должность: {$this->role}<br><br>";
    }
}




$persons = [
    new Teacher("Марат", "marrr@gmail.com", ["Математика", "Информатика"]),
    new Teacher("Сергей", "serGAY@mail.ru", ["Русский язык"]),
    new Student("Павел", "pashok@mail.ru", "Группа Ив1к-24"),
    new Student("Лев", "loywushka@mail.ru", "Группа Ив1к-24"),
    new Admin("Алексей", "Alex@admin.com", "Директор"),
    new Admin("Аристарх", "4r11k@admin.com", "Секретарь"),
    new User("Буда", "budach@gmail.com")
];


foreach ($persons as $person) {
    $person->sayAboutMe();
}

?>