<?php

spl_autoload_register();
// require_once('Animal.php');
// require_once('Bird.php');
// require_once('Milkeater.php');
// require_once('NotFlyBird.php');

$animals  = [];

$sparrow = new Bird(10, 100, 'Воробей', 50);
$animals [] = $sparrow;
$ant = new Animal(3,10,'Муравей');
$animals [] = $ant;
$monkey = new Milkeater(50, 40, 'Мартышка');
$animals [] = $monkey;
$penguin = new NotFlyBird(50,40, 'Пингвин', 100);
$animals [] = $penguin;

foreach ($animals as $animal){
    $animal->sayHello();
    echo '<br>';
}
?>
<p>

<?php 
echo '<h2> Задание 1</h2>';
class User{
    private $name;
    private $animals = [];
    public function __construct($name){
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    // public function setName($newName){
    //     $this->name = $newName;
    // }

    public function setName($newName){
        if($newName){
            $this->name = $newName;
            return true;
        }
        return false;
    }
    public function sayAboutME() {
    echo "Меня зовут: $this->name";
    echo "Мои животные: ";
    foreach($this->animals  as $animal)  {
        echo $animal->sayHello(), '<br>';
    }
}

public function addAnimal($animal) {
    $this->animals[] = $animal;
}
public static function about($animal) {
    return $animal->type;
}
}
$animals = [];
$sparrow = new Bird(10, 10, "Воробей", 50);
$animals = $sparrow;
$ant = new Animal(3, 10, "Муравей");
$animals = $ant;
$monkey = new Milkeater(50, 40, "Мартышка");
$animals = $monkey;
$penguin = new NotFlyBird(50, 40, "Пингвин", 100);
$animals = $penguin;
$user1 = new User ('Воучик');
$user1->addAnimal($sparrow);
$user1->addAnimal($monkey);
$user1->sayAboutME();
?>
