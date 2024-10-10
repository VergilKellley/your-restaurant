<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit("POST request method required");
} elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_header_info'])) {
    $delete_header_info_id = $_POST['delete_header_info'];

    $delete_header_info_query = "DELETE FROM header_info WHERE id = '$delete_header_info_id'";

    $delete_header_info = mysqli_query($conn, $delete_header_info_query);

    if($delete_header_info) {
        header("Location: ../edit_header_info.php");
        exit();
    } else {

        $_SESSION['can_not_delete'] = "Can not delete header info. ";
        header("Location: ../edit_header_info.php");
    }
}
