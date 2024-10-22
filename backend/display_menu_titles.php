<?php
require 'db.php';
//Display Website colors 
$sql = "SELECT * FROM menu_titles;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    $menu_small_top_title = $row['menu_small_top_title'];
    $menu_main_title = $row['menu_main_title'];
    $menu_sub_title = $row['menu_sub_title'];
    }
}