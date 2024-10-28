<?php
require 'db.php';
//Display Website colors 
$sql = "SELECT * FROM footer;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    $footer_main_title = $row['footer_main_title'];
    $footer_sub_title = $row['footer_sub_title'];
    $footer_facebook = $row['footer_facebook'];
    $footer_instagram = $row['footer_instagram'];
    $footer_youtube = $row['footer_youtube'];
    $footer_google_map = $row['footer_google_map'];
    }
}