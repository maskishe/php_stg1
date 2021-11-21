<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    * {
    box-sizing: border-box;
    }

    body {
    margin: 0;
    font-family: Arial;
    }

    /* The grid: Four equal columns that floats next to each other */
    .column {
    float: left;
    width: 25%;
    padding: 10px;
    }

    /* Style the images inside the grid */
    .column img {
    opacity: 0.8; 
    cursor: pointer; 
    }

    .column img:hover {
    opacity: 1;
    }

    /* Clear floats after the columns */
    .row:after {
    content: "";
    display: table;
    clear: both;
    }

    /* The expanding image container */
    .container {
    position: relative;
    display: none;
    }

    /* Expanding image text */
    #imgtext {
    position: absolute;
    bottom: 15px;
    left: 15px;
    color: white;
    font-size: 20px;
    }

    /* Closable button inside the expanded image */
    .closebtn {
    position: absolute;
    top: 10px;
    right: 15px;
    color: white;
    font-size: 35px;
    cursor: pointer;
    }
</style>
</head>
<body>

<div style="text-align:center">
  <h2>Tabbed Image Gallery</h2>
  <p>Click on the images below:</p>
</div>

<div style="text-align:center">
<form action="upload.php" method="post" enctype="multipart/form-data">
<p>Select image to upload:</p>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
</div>

<div style="text-align:center">
<form action="showimg.php" method="get" enctype="multipart/form-data">
<p>Select image id to show:</p>
  <input type="number" name="image_id" id="image_id">
  <input type="submit" value="Chose ID" name="submit">
</form>
</div>

<div class="row">

<?php 
    $link = mysqli_connect('localhost', 'root', 'root', 'GB');
    if ($link) {

        $result = mysqli_query($link, 'select * from images where 1');

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="column"><a href="showimg.php?image_id='. $row["id"] .'" target="_blank"><img src="' . $row["URL"] . '" alt="' . $row["name"] . '" style="width:100%""></a></div>';
            //var_dump($row["id"]);
        }
        mysqli_close($link);
    }
    else {
        die('Couldnt connect to DB');
    }
    
    // $images = [];
    // foreach ($images as $image) {
    //     $ImageLink = '/hw5.php?image_id='. $image['id'];
    // }
    // 
    //}
?>

<!---
 <div class="column">
    <img src="./images/img_snow.jpeg" alt="Snow" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="./images/img_mountains.jpeg" alt="Mountains" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="./images/img_lights.jpeg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
--->
  
</div>

<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:100%">
  <div id="imgtext"></div>
</div>

<script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>

</body>
</html>
