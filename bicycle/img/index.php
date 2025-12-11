<?php
// Задание №1
$products = [
    [
        'name' => 'Горный велосипед MTB-27.5',
        'category' => 'Горные велосипеды',
        'price' => 25000,
        'brand' => 'Trek',
        'imageUrl' => 'maunt.jpg',
        'stock' => true,
        'offer' => 'Скидка 15%'
    ],
    [
        'name' => 'Горный велосипед Hardtail',
        'category' => 'Горные велосипеды',
        'price' => 18000,
        'brand' => 'Stels',
        'imageUrl' => '5cd43e6be926896fdf9be056fc5555be.jpg',
        'stock' => true,
        'offer' => ''
    ],
    [
        'name' => 'Шоссейный велосипед Carbon',
        'category' => 'Шоссейные велосипеды',
        'price' => 45000,
        'brand' => 'Specialized',
        'imageUrl' => 'i2.jpg',
        'stock' => true,
        'offer' => 'Бесплатная доставка'
    ],
    [
        'name' => 'Шоссейный велосипед Aero',
        'category' => 'Шоссейные велосипеды',
        'price' => 32000,
        'brand' => 'Giant',
        'imageUrl' => 'aero1.jpg',
        'stock' => false,
        'offer' => ''
    ],
    [
        'name' => 'Городской велосипед Comfort',
        'category' => 'Городские велосипеды',
        'price' => 15000,
        'brand' => 'Electra',
        'imageUrl' => 'i.jpg',
        'stock' => true,
        'offer' => 'Скидка 10%'
    ],
    [
        'name' => 'Городской велосипед Classic',
        'category' => 'Городские велосипеды',
        'price' => 12000,
        'brand' => 'Scwinn',
        'imageUrl' =>'orig.jpg',
        'stock' => true,
        'offer' => ''
    ],
    [
        'name' => 'Велосипедный шлем Aero',
        'category' => 'Аксессуары',
        'price' => 3500,
        'brand' => 'Giro',
        'imageUrl' => 'shlem.jpg',
        'stock' => true,
        'offer' => 'Купи 2, получи скидку 20%'
    ],
    [
        'name' => 'Велосипедный фонарь LED',
        'category' => 'Аксессуары',
        'price' => 1200,
        'brand' => 'Cateye',
        'imageUrl' => 'light.jpg',
        'stock' => true,
        'offer' => ''
    ],
    [
        'name' => 'Велосипедный замок U-Lock',
        'category' => 'Аксессуары',
        'price' => 2000,
        'brand' => 'Kryptonite',
        'imageUrl' => 'lock.jpg',
        'stock' => false,
        'offer' => ''
    ],
    [
        'name' => 'Велосипедная сумка на раму',
        'category' => 'Аксессуары',
        'price' => 1500,
        'brand' => 'Topeak',
        'imageUrl' => 'bag.jpg',
        'stock' => true,
        'offer' => 'Скидка 5%'
    ]
];
// Задание №2
echo "<h1>Товары интернет-магазина велосипедов</h1>";
foreach ($products as $product) {
    echo "<p>";
    echo "Название: " . $product['name'] . "<br>";
    echo "Категория: " . $product['category'] . "<br>";
    echo "Бренд: " . $product['brand'] . "<br>";
    echo "Цена: " . $product['price'] . " руб.<br>";
    echo "</p>";
}
// Задание №3
echo "<table border='1'>";
echo "<tr>";
echo "<th>Наименование</th>";
echo "<th>Категория</th>";
echo "<th>Бренд</th>";
echo "<th>Цена</th>";
echo "</tr>";

foreach ($products as $product) {
    echo "<tr>";
    echo "<td>" . $product['name'] . "</td>";
    echo "<td>" . $product['category'] . "</td>";
    echo "<td>" . $product['brand'] . "</td>";
    echo "<td>" . $product['price'] . " руб.</td>";
    echo "</tr>";
}

echo "</table>";

// Задание №4
echo '<br>';
$categories = array_unique(array_column($products, 'category'));

$cat = $_POST['category'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Товары по категории</title>
    <meta charset="utf-8">
</head>
<body>

<form method="post">
    <select name="category">
        <option value="">Выберите категорию</option>
        <?php foreach ($categories as $c): ?>
            <option <?= $cat == $c ? 'selected' : '' ?>><?= $c ?></option>
        <?php endforeach; ?>
    </select>
    <button>Показать</button>
</form>

<?php
if ($cat !== '') {
    $found = false;
    foreach ($products as $p) {
        if ($p['category'] === $cat) {
            if (!$found) {
                echo "<h3>Товары в категории: $cat</h3>";
                echo "<table border='1' cellpadding='5'>";
                echo "<tr><th>Наименование</th><th>Категория</th><th>Бренд</th><th>Цена</th></tr>";
                $found = true;
            }
            echo "<tr>";
            echo "<td>{$p['name']}</td>";
            echo "<td>{$p['category']}</td>";
            echo "<td>{$p['brand']}</td>";
            echo "<td>{$p['price']} руб.</td>";
            echo "</tr>";
        }
    }
    if ($found) {
        echo "</table>";
    } else {
        echo "<p>В категории пока нет товаров</p>";
    }
} elseif ($_POST) {
    echo "<p>Ничего не найдено</p>";
}
?>

</body>
</html>

<!-- // задание №5 -->
<form action="">
    <p>Введите название товара<input type  ="text" name ="name"></p>
    <p><input type="submit" value="Отправить" name ="Name"></p>
</form>

<?php
if(isset($_GET["Name"])) {
    $name = $_GET["name"];
    foreach ($products as $bicycle) {
        if ($bicycle["name"] == $name) {
            $good = $bicycle;
}
}
}
?>
<?php
if(isset($good)): ?>
Наименование: <?=$good['name']?> <br>
<img src="img/<?=$good['imageUrl']?>" width="200px"><br>
Акция: <?=$good['offer']?><br>
Цена: <?=$good['price']?><br>
<?php else: ?>
    Товар не найден
<?php endif; ?>

