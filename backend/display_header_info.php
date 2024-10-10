<?php
require 'db.php';
//Display Website colors 
$sql = "SELECT * FROM header_info;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    $header_business_title = $row['header_business_title'];
    $business_name_font = $row['business_name_font'];
    $street_address = $row['street_address'];
    $business_hours_mon = $row['business_hours_mon'];
    $business_hours_tue = $row['business_hours_tue'];
    $business_hours_wed = $row['business_hours_wed'];
    $business_hours_thur = $row['business_hours_thur'];
    $business_hours_fri = $row['business_hours_fri'];
    $business_hours_sat = $row['business_hours_sat'];
    $business_hours_sun = $row['business_hours_sun'];
    $phone = $row['phone'];
    $email = $row['email'];
    }
}