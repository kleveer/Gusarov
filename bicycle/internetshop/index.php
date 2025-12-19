<?php
$json = file_get_contents('goods.json');
$data = json_decode($json, true) ?: [];

if (!isset($data['products']) || !is_array($data['products'])) {
    $data['products'] = [];
}

if (isset($_GET['delete'])) {
    $indexToDelete = $_GET['delete'];

    if (isset($data['products'][$indexToDelete])) {
        unset($data['products'][$indexToDelete]);
        

        $data['products'] = array_values($data['products']);
        
        file_put_contents('goods.json', json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
    

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!is_numeric($_POST['price'])) {
        echo "<h3>Ошибка: цена должна быть числом!</h3>";
    } else {
        $category = trim($_POST['category_custom'] ?? '');
        if ($category === '') { $category = 'Без категории'; }

        $new_product = [
            'name'     => trim($_POST['name'] ?? ''),
            'brand'    => trim($_POST['brand'] ?? ''),
            'price'    => (float)$_POST['price'],
            'category' => $category,
            'offer'    => trim($_POST['offer'] ?? ''),
            'imageUrl' => trim($_POST['imageUrl'] ?? ''),
            'stock'    => trim($_POST['stock'] ?? '')
        ];

        $data['products'][] = $new_product;
        file_put_contents('goods.json', json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
}
$categories = [];
foreach ($data['products'] as $originalIndex => $product) {
    if (!is_array($product)) continue;
    $cat = $product['category'] ?? 'Без категории';
    $product['id'] = $originalIndex; 
    $categories[$cat][] = $product;
}
?>
<hr>
<h2>Добавить новый товар</h2>
<form method="POST">
    Название:<br> <input type="text" name="name" required style="width:300px;"><br><br>
    Бренд:<br> <input type="text" name="brand" style="width:300px;"><br><br>
    Цена (руб.):<br> <input type="text" name="price" required style="width:150px;"><br><br>
    Количество на складе:<br> <input type="text" name="stock" style="width:150px;"><br><br>
    Ссылка на картинку:<br> <input type="text" name="imageUrl" style="width:400px;"><br><br>
    Акция:<br> <input type="text" name="offer" style="width:400px;"><br><br>
    Своя категория:<br> <input type="text" name="category_custom" style="width:300px;"><br><br>
    <button type="submit">Добавить товар</button>
</form>
<select name="category_select">
        <option value="">-- Выбрать категорию --</option>
        <?php
        $json = file_get_contents('goods.json');
        $data = json_decode($json, true);
        $products = $data['products'];
        
        $all_names = [];
        foreach ($products as $p) {
            $c = $p['category'] ?? 'Без категории';
            if (!in_array($c, $all_names)) { $all_names[] = $c; }
        }
        sort($all_names);


        foreach ($all_names as $name) {
            echo "<option value='$name'>$name</option>";
        }
        ?>
    </select>

<?php
foreach ($categories as $cat_name => $items) {
    echo "<h3>=== $cat_name ===</h3>";

    foreach ($items as $item) {
        echo "<strong>{$item['name']}</strong> ";
        echo "<a href='?delete={$item['id']}''>[удалить]</a><br>";
        
        echo "Бренд: {$item['brand']}<br>";
        echo "Цена: {$item['price']} руб.<br>";
        echo "Акция: " . ($item['offer'] ?: 'нет') . "<br>";
        echo "<img src=" . ($item['imageUrl']) . " style='width:100px;'><br>";
        echo "На складе: " . ($item['stock'] !== '' ? $item['stock'] : 'не указано') . "<br><br>";
    }
}
?>

