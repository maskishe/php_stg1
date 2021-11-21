<?php
//  Author: Mikhail Kurzin (GitHub: maskishe, Email: maskishe@gmail.com, Tgram: maskishe)
//  Date:   21 Nov 2021
//  

// 1. Создать галерею изображений, состоящую из двух страниц:
// просмотр всех фотографий (уменьшенных копий);
// просмотр конкретной фотографии (изображение оригинального размера) по ее ID в базе данных.
echo '<h1>Lesson 5. Task #1</h1>';
$link = mysqli_connect('localhost', 'root', 'root', 'GB');
if ($link) {
    //var_dump($link);
    $result = mysqli_query($link, 'select * from test where 1');
    //var_dump($result);
    //var_dump(mysqli_fetch_all($result)); - выбирает все данные
    while ($row = mysqli_fetch_assoc($result)) {
        var_dump($row);
        //mysqli_insert_id($link); - возвращает последний id
    }
    mysqli_close($link);
}
else {
    die('Couldnt connect to DB');
}

$images = [];
foreach ($images as $image) {
    $ImageLink = '/hw5.php?image_id='. $image['id'];
}
$imageid = $_GET['image_id'];

?>

<a href="/images/<?php echo $ImageLink; ?>" target="_blank">

<!-- // 2. В базе данных создать таблицу, в которой будет храниться информация о картинках (адрес на сервере, размер, имя).
echo '<h1>Lesson 5. Task #2</h1>';

// 3. *На странице просмотра фотографии полного размера под картинкой должно быть указано число ее просмотров.
echo '<h1>Lesson 5. Task #3</h1>';

// 4. *На странице просмотра галереи список фотографий должен быть отсортирован по популярности. Популярность = число кликов по фотографии.
echo '<h1>Lesson 5. Task #4</h1>'; -->