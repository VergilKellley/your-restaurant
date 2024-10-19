<?php
require 'db.php';
//Display Website colors 
$sql = "SELECT * FROM about;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    $about_small_title = $row['about_small_title'];
    $about_main_title = $row['about_main_title'];
    $about_text = $row['about_text'];
    $about_sub_title = $row['about_sub_title'];
    $about_since_year = $row['about_since_year'];
    $about_small_img = $row['about_small_img'];
    $about_small_img_desc = $row['about_small_img_desc'];
    $about_large_img = $row['about_large_img'];
    $about_large_img_desc = $row['about_large_img_desc'];
    }
}