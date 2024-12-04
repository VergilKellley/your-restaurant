<?php
require 'db.php';
//Display Website colors 
$sql = "SELECT * FROM reservations;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {   
    $reservation_title = $row['reservation_title'];
    $reservation_text = $row['reservation_text'];
    }
}