<?php
require 'db.php';
//Display Website colors 
$sql = "SELECT * FROM promotions;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {   
    $small_top_title = $row['small_top_title'];
    $main_title = $row['main_title'];
    $sub_title = $row['sub_title'];
    $promo_img_title_1 = $row['promo_img_title_1'];
    $promo_img_text_1 = $row['promo_img_text_1'];
    $promo_img_title_2 = $row['promo_img_title_2'];
    $promo_img_text_2 = $row['promo_img_text_2'];
    $promo_img_title_3 = $row['promo_img_title_3'];
    $promo_img_text_3 = $row['promo_img_text_3'];
    }
}