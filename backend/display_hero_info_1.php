<?php
require 'db.php';
//Display Website colors 
$sql = "SELECT * FROM hero_info_1;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    $hero_top_text_1 = $row['hero_top_text_1'];
    $hero_large_text_1 = $row['hero_large_text_1'];
    $hero_bottom_text_1 = $row['hero_bottom_text_1'];
    $hero_top_btn_text_1 = $row['hero_top_btn_text_1'];
    $hero_top_btn_link_1 = $row['hero_top_btn_link_1'];
    $hero_bottom_btn_text_1 = $row['hero_bottom_btn_text_1'];
    $hero_bottom_btn_link_1 = $row['hero_bottom_btn_link_1'];
    }
}