<?php
session_start();
require 'db.php';

if (isset($_POST['submit_delete_menu_item']))
 {


    $delete_menu_item_info_id = filter_var($_POST['submit_delete_menu_item'], FILTER_SANITIZE_NUMBER_INT);

    $delete_menu_item_query = "DELETE FROM menu_item WHERE id = '$delete_menu_item_info_id'";

    $delete_menu_item_result = mysqli_query($conn, $delete_menu_item_query);

    if($delete_menu_item_result) {
        header("Location: ../edit_drinks_menu_item_info");
        exit();
    } else {
        echo "Something went wrong.";
        die();
    }
}
