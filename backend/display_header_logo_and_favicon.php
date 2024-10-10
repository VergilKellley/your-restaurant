<?php
require 'db.php';
//Display Website colors 
$sql = "SELECT * FROM header_logo_and_favicon;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    $header_logo_and_favicon = $row['header_logo_and_favicon'];
    $header_logo_and_favicon_desc = $row['header_logo_and_favicon_desc'];
    $header_logo_and_favicon_title = $row['header_logo_and_favicon_title'];
    }
}