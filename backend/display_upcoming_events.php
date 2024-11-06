<?php
require 'db.php';
//Display Website colors 
$sql = "SELECT * FROM upcoming_events;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {   
    $upcoming_events_small_top_title = $row['upcoming_events_small_top_title'];

    $upcoming_events_main_title = $row['upcoming_events_main_title'];

    $upcoming_events_img_1 = $row['upcoming_events_img_1'];

    $upcoming_events_img_desc_1 = $row['upcoming_events_img_desc_1'];

    $upcoming_events_img_title_1 = $row['upcoming_events_img_title_1'];

    $upcoming_events_img_text_1 = $row['upcoming_events_img_text_1'];

    $upcoming_events_img_2 = $row['upcoming_events_img_2'];

    $upcoming_events_img_desc_2 = $row['upcoming_events_img_desc_2'];

    $upcoming_events_img_title_2 = $row['upcoming_events_img_title_2'];

    $upcoming_events_img_text_2 = $row['upcoming_events_img_text_2'];

    $upcoming_events_img_3 = $row['upcoming_events_img_3'];

    $upcoming_events_img_desc_3 = $row['upcoming_events_img_desc_3'];

    $upcoming_events_img_title_3 = $row['upcoming_events_img_title_3'];

    $upcoming_events_img_text_3 = $row['upcoming_events_img_text_3'];
    }
}