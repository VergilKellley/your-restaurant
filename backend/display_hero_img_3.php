<?php
require 'db.php';
//Display Website colors 
$sql = "SELECT * FROM hero_img_3;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    $hero_img_3 = $row['hero_img_3'];
    $hero_img_desc_3 = $row['hero_img_desc_3'];
    }
}