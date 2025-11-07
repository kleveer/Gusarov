<?php
class animal
{
    public $higth;
    public $weight; 
    public $type;
    public function __construct($higth, $weight, $type) {
        $this->higth = $higth;
        $this->weight = $weight;
        $this->type = $type;
    }
    public function __destruct() {
        echo "Объект удаляется";
    }
    public function say() {
        return "rhrhrh";
    }
    public function sayHello() {
        echo "Привет!  ";
    }
}
$animal = new animal(100, 80, "Лев" );
// $animal->higth = "100";
// $animal->weight = "49";
// $animal->type = "Лев";

?>
<P>Рост: <?= $animal ->higth?></P>
<P>Вес: <?= $animal ->weight?></P>
<P>Тип: <?= $animal ->type?></P>
<P>Царь зверей говорит:  <?= $animal ->say()?></P>
<P>Царь зверей говорит:  <?php $animal ->sayHello();?></P>
<p><B>Задание №1</B></p>
<?php
class User {
    public $firstName;
    public $lastName;
    public $email;
    public function sayAboutMe() {
        echo "Моё имя и фамилия: " . $this->firstName . $this->lastName;
    }
}
$newUser = new User();
$newUser->firstName = "Даниил ";
$newUser->lastName = "Гусаров";
?>
<p><?=$newUser ->sayAboutMe()?></p>
<p><B>Задание №2</B></p>
<?php
class Car {
    public $brand;
    public $model;
    public $type;
    public $color;
    public $weight;
    public function getWeight() {
        return "Вес автомобиля: " . $this->weight ;
    }
    public function getInfo() {
        return "Информация о модели: ". $this->brand ."". $this->model ;
    }
}
$car = new Car();
$car->brand = "Tesla ";
$car->model = "cybertrack";
$car->type = "пикап";
$car->color = "black";
$car->weight = "3020kg";
?>
<p><?=$car ->getInfo()?></p>
<p><?=$car ->getWeight()?></p>
<p><B>Задание №3</B></p>
<?php
class Cars {
    public $brand = 'Неизвестно';
    public $model = 'Неизвестно';
    public $type = 'Неизвестно';
    public $color = 'Неизвестно';
    public $weight = 0;
    public $year = 0;
    public $price = 0;

    public function getInfo() {
        echo "Марка: $this->brand, Модель: $this->model, Тип: $this->type, Цвет: $this->color";
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getPrice() {
        return $this->price;
    }
}

$car1 = new Cars();
$car1->brand = "Ferrari";
$car1->model = "250 GTO";
$car1->year = 1962;
$car1->price = 70000000;

$car2 = new Cars();
$car2->brand = "Bugatti";
$car2->model = "Type 57SC Atlantic";
$car2->year = 1936;
$car2->price = 114000000;

$car3 = new Cars();
$car3->brand = "Mercedes-Benz";
$car3->model = "300 SLR Uhlenhaut Coupe";
$car3->year = 1955;
$car3->price = 143000000;

$car4 = new Cars();
$car4->brand = "Aston Martin";
$car4->model = "DB5";
$car4->year = 1964;
$car4->price = 3000000;

$car5 = new Cars();
$car5->brand = "Porsche";
$car5->model = "911 GT1";
$car5->year = 1997;
$car5->price = 5000000;

$totalPrice = $car1->getPrice() + $car2->getPrice() + $car3->getPrice() + $car4->getPrice() + $car5->getPrice();
?>
<p Машина 1:><?= $car1->getInfo() ?>, Год: <?= $car1->year ?>, Цена: <?= $car1->getPrice() ?> долларов</p>
<p Машина 2:><?= $car2->getInfo() ?>, Год: <?= $car2->year ?>, Цена: <?= $car2->getPrice() ?> долларов</p>
<p Машина 3:><?= $car3->getInfo() ?>, Год: <?= $car3->year ?>, Цена: <?= $car3->getPrice() ?> долларов</p>
<p Машина 4:><?= $car4->getInfo() ?>, Год: <?= $car4->year ?>, Цена: <?= $car4->getPrice() ?> долларов</p>
<p Машина 5:><?= $car5->getInfo() ?>, Год: <?= $car5->year ?>, Цена: <?= $car5->getPrice() ?> долларов</p>
<p Общая стоимость коллекции:><?= $totalPrice ?> долларов</p>
<?php
unset($animal);
?>
<p><B>Задание №4</B></p>
<?php
class Carse {
    private $brand;
    private $model;
    private $type;
    private $color;
    private $weight;

    public function __construct($brand, $model, $type, $color = "черный", $weight = 0) {
        $this->brand = $brand;
        $this->model = $model;
        $this->type = $type;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function getInfo() {
        echo "Модель: $this->brand $this->model, Тип: $this->type, Цвет: $this->color\n";
    }

    public function getWeight() {
        return $this->weight;
    }
}

$cars = [
    ['brand' => 'BMW', 'model' => 'X5', 'type' => 'Кроссовер'],
    ['brand' => 'Mercedes', 'model' => 'E-Class', 'type' => 'Седан'],
    ['brand' => 'Audi', 'model' => 'Q7', 'type' => 'Внедорожник'],
    ['brand' => 'Volkswagen', 'model' => 'Golf', 'type' => 'Хэтчбек'],
    ['brand' => 'Ford', 'model' => 'Mustang', 'type' => 'Купе']
];

$objCars = [
    new Carse($cars[0]['brand'], $cars[0]['model'], $cars[0]['type']),
    new Carse($cars[1]['brand'], $cars[1]['model'], $cars[1]['type']),
    new Carse($cars[2]['brand'], $cars[2]['model'], $cars[2]['type']),
    new Carse($cars[3]['brand'], $cars[3]['model'], $cars[3]['type']),
    new Carse($cars[4]['brand'], $cars[4]['model'], $cars[4]['type'])
];

$objCars[0]->getInfo(); 
$objCars[1]->getInfo(); 
$objCars[2]->getInfo(); 
$objCars[3]->getInfo(); 
$objCars[4]->getInfo(); 
?>
<p><B>Задание №5</B></p>
