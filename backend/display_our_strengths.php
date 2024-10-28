<?php
require 'db.php';
//Display Website colors 
$sql = "SELECT * FROM our_strengths ;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    $our_strengths_small_top_title = $row['our_strengths_small_top_title'];
    $our_strengths_main_title = $row['our_strengths_main_title'];
    $our_strengths_img_1 = $row['our_strengths_img_1'];
    $our_strengths_img_desc_1 = $row['our_strengths_img_desc_1'];
    $our_strengths_img_title_1 = $row['our_strengths_img_title_1'];
    $our_strengths_img_text_1 = $row['our_strengths_img_text_1'];
    $our_strengths_img_2 = $row['our_strengths_img_2'];
    $our_strengths_img_desc_2 = $row['our_strengths_img_desc_2'];
    $our_strengths_img_title_2 = $row['our_strengths_img_title_2'];
    $our_strengths_img_text_2 = $row['our_strengths_img_text_2'];
    $our_strengths_img_3 = $row['our_strengths_img_3'];
    $our_strengths_img_desc_3 = $row['our_strengths_img_desc_3'];
    $our_strengths_img_title_3 = $row['our_strengths_img_title_3'];
    $our_strengths_img_text_3 = $row['our_strengths_img_text_3'];$our_strengths_img_4 = $row['our_strengths_img_4'];
    $our_strengths_img_desc_4 = $row['our_strengths_img_desc_4'];
    $our_strengths_img_title_4 = $row['our_strengths_img_title_4'];
    $our_strengths_img_text_4 = $row['our_strengths_img_text_4'];
    }
}