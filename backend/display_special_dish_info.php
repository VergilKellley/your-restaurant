<?php
require 'db.php';
//Display Website colors 
$sql = "SELECT * FROM special_dish;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    $special_dish_small_title = $row['special_dish_small_title'];
    $special_dish_main_title = $row['special_dish_main_title'];
    $special_dish_text = $row['special_dish_text'];
    $special_dish_old_price = $row['special_dish_old_price'];
    $special_dish_sale_price = $row['special_dish_sale_price'];
    $special_dish_img = $row['special_dish_img'];
    $special_dish_img_desc = $row['special_dish_img_desc'];
    $special_dish_bkgd_img = $row['special_dish_bkgd_img'];
    $special_dish_bkgd_img_desc = $row['special_dish_bkgd_img_desc'];
    }
}