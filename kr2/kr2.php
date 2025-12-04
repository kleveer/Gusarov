<?php
class Ad {
    private $head;
    private $text;
    private $date;
    private $views;

    public function __construct($head, $text, $date = "", $views = 0) {
        $this->head = $head;
        $this->text = $text;
        $this->date = $date = date('Y-m-d');
        $this->views = $views;
    }

    public function printAd() {
        echo "<h3>{$this->head}</h3>";
        echo "<p>{$this->text}</p>";
        echo "<small>Дата: {$this->date}, Просмотры: {$this->views}</small><br><br>";
    }

    public function toArray() {
        return [
            "head" => $this->head,
            "text" => $this->text,
            "date" => $this->date,
            "views" => $this->views
        ];
    }
}
class ImgAd extends Ad {
    protected $img;

    public function __construct($head, $text, $img, $date = "", $views = 0) {
        parent::__construct($head, $text, $date, $views);
        $this->img = $img;
    }

    public function printAd() {
        parent::printAd();
        echo "<img src=' . $this->img  .' width='200'><br><br>";
    }

    public function toArray() {
        $arr = parent::toArray();
        $arr['img'] = $this->img;
        return $arr;
    }
}
class BoldAd extends ImgAd {

    public function printAd() {
        echo "<h3><b>{$this->toArray()['head']}</b></h3>";
        echo "<p><b>{$this->toArray()['text']}</b></p>";
        echo "<img src='{$this->img}' width='200'><br>";
        echo "<b>Дата: {$this->toArray()['date']}, Просмотры: {$this->toArray()['views']}</b><br><br>";
    }

    public function toArray() {
        $arr = parent::toArray();
        return $arr;
    }
}
$adsData = file_get_contents("ads.json");
$objData = json_decode($adsData, True);

$objAds = array();
foreach ($objData as $ad) {
    if (isset($ad['img']) and !empty($ad['img'])) {
        if (isset($ad['bold']) and $ad['bold']) {
            $objAds[] = new BoldAd($ad['head'], $ad['text'], $ad['img']);
        } else {
            $objAds[] = new ImgAd($ad['head'], $ad['text'], $ad['img']);
        }
    } else {
        $objAds[] = new Ad($ad['head'], $ad['text'], $ad['date']);
    }
}
if(isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    unset($objAds[$id]);
    $objAds = array_values($objAds);
}
foreach($objAds as $obj) {
    $obj->printAd();
}
echo  "Всего: " . count($objAds) . " Объявлений";
?>