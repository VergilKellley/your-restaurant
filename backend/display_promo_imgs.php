<?php
require 'db.php';
//Display Website colors 
$sql = "SELECT * FROM promotions;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    $promo_img_1 = $row['promo_img_1'];
    $promo_img_desc_1 = $row['promo_img_desc_1'];
    $promo_img_2 = $row['promo_img_2'];
    $promo_img_desc_2 = $row['promo_img_desc_2'];
    $promo_img_3 = $row['promo_img_3'];
    $promo_img_desc_3 = $row['promo_img_desc_3'];
    }
}