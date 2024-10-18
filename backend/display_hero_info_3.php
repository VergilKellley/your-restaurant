<?php
require 'db.php';
//Display Website colors 
$sql = "SELECT * FROM hero_info_3;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    $hero_top_text_3 = $row['hero_top_text_3'];
    $hero_large_text_3 = $row['hero_large_text_3'];
    $hero_bottom_text_3 = $row['hero_bottom_text_3'];
    $hero_top_btn_text_3 = $row['hero_top_btn_text_3'];
    $hero_top_btn_link_3 = $row['hero_top_btn_link_3'];
    $hero_bottom_btn_text_3 = $row['hero_bottom_btn_text_3'];
    $hero_bottom_btn_link_3 = $row['hero_bottom_btn_link_3'];
    }
}