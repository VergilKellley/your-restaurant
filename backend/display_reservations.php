<?php
require 'db.php';
//Display Website colors 
$sql = "SELECT * FROM reservations;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {   
    $main_title = $row['main_title'];
    $reservation_text = $row['reservation_text'];
    }
}