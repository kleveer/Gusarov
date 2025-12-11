<?php
$jsonContent = file_get_contents('goods.json');
$data = json_decode($jsonContent, true);

if (!is_array($data)) {
    $data = ['products' => []];
}

if (!isset($data['products']) || !is_array($data['products'])) {
    $data['products'] = [];
}

$products = $data['products'];

$categories = [];

foreach ($products as $product) {

    if (!is_array($product)) continue;

    $category = $product['category'] ?? 'Без категории';

    $product = array_merge([
        'name'     => 'Без названия',
        'brand'    => 'Не указан',
        'price'    => 0,
        'offer'    => '',
        'imageUrl' => '',
        'stock'    => ''
    ], $product);

    $categories[$category][] = $product;
}

foreach ($categories as $category => $items) {
    echo "=== $category ===<br>";
    foreach ($items as $item) {
        echo "Название: {$item['name']}<br>";
        echo "Бренд: {$item['brand']}<br>";
        echo "Цена: {$item['price']} руб.<br>";
        echo "Акция: " . ($item['offer'] ?: "нет") . "<br><br>";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!is_numeric($_POST['price'])) {
        exit("<b>Ошибка:</b> поле <b>price</b> должно быть числом!");
    }

    if ($_POST['stock'] !== '' && !is_numeric($_POST['stock'])) {
        exit("<b>Ошибка:</b> поле <b>stock</b> должно быть числом!");
    }

    $category = trim($_POST['category_custom']) !== ''
        ? trim($_POST['category_custom'])          
        : $_POST['category'];                      

    $newProduct = [
        'name'     => $_POST['name'],
        'category' => $category,
        'price'    => (float)$_POST['price'],
        'brand'    => $_POST['brand'],
        'imageUrl' => $_POST['imageUrl'] ?? '',
        'stock'    => $_POST['stock'] !== '' ? (float)$_POST['stock'] : '',
        'offer'    => $_POST['offer'] ?? ''
    ];

    $data['products'][] = $newProduct;

    file_put_contents('goods.json', json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

}
if(isset($_POST['delete'])){
    $deleted = $_POST['delete'];
}
if($deleted != null and isset($products[$deleted])){
    unset($products[$deleted]);
    $products = array_values($products);
    $data['products'] = $products;
}
?>

<h2>Добавить товар</h2>
<form method="POST">

    Название: <br>
    <input type="text" name="name" required><br><br>

    Бренд: <br>
    <input type="text" name="brand"><br><br>

    Цена: <br>
    <input type="text" name="price" required><br><br>

    Stock: <br>
    <input type="text" name="stock"><br><br>

    Изображение (URL): <br>
    <input type="text" name="imageUrl"><br><br>

    Акция: <br>
    <input type="text" name="offer"><br><br>

    <b>Категория:</b><br>

    <input type="text" name="category_custom" placeholder="Новая категория"><br><br>
    <br><br>
    <button type="submit">Добавить</button>
    <button type="submit" name="delete">Удалить?</button>
</form>