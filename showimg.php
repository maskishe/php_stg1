<?php
    $link = mysqli_connect('localhost', 'root', 'root', 'GB');
    $imageid = $_GET['image_id'];
    //var_dump($imageid);

    if ($link) {
        $result = mysqli_query($link, 'select URL from Images where id = ' . $imageid);
        $row = mysqli_fetch_assoc($result);
        $imgSrc = $row['URL'];
        //var_dump($row);
        //Count +1
        //$insert_sql = UPDATE Images SET count ='. $row['count']++ .'where id = ' . $imageid
        //$insert_sql = "UPDATE Images SET count = '".$row['count']++."' where id = 2"; //почему-то не вставляет count++
        //$insert = mysqli_query($link, $insert_sql);
        mysqli_close($link);
    }
    else {
        die('Couldnt connect to DB');
    }


echo '<img src="'. $imgSrc . '" alt="" style="width:100%">';