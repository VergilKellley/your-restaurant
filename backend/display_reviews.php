<?php
require 'db.php';
//Display Website colors 
$sql = "SELECT * FROM reviews;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    $reviews_bkgd_img = $row['reviews_bkgd_img'];
    $reviews_bkgd_img_dec = $row['reviews_bkgd_img_desc'];
    $review = $row['review'];
    $reviews_small_img = $row['reviews_small_img'];
    $reviews_small_img_desc = $row['reviews_small_img_desc'];
    $reviews_small_img_text = $row['reviews_small_img_text'];
    }
}