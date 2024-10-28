<?php
require 'db.php';
//Display Website colors 
$sql = "SELECT * FROM menu_item;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {   
    $menu_item_img = $row['menu_item_img'];
    $menu_item_img_desc = $row['menu_item_img_desc'];
    $menu_item_name = $row['menu_item_name'];
    $menu_item_desc = $row['menu_item_desc'];
    $menu_item_price = $row['menu_item_price'];
    $menu_item_text = $row['menu_item_text'];
    $menu_item_num = $row['menu_item_num'];
    }
}