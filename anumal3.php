<?php 
class animal {

    protected $hight;
    public $higth;
    public $weight; 
    public $type;
    public static $humor = false;
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
    public static function about($animal){
        return $animal->type;
    }
}
$tiger = new animal(70, 120,"Тигр");
$tiger->type;
echo animal::about($tiger);

$animal = new animal(100, 80, "Лев" );
$animal->higth = "100";
$animal->weight = "49";
$animal->type = "Лев";
class bird extends animal {

}
$sparrow = new bird(10, 100, "Воробей");
$sparrow->sayHello(); 
?>
<p><?= animal::$humor ?></p>