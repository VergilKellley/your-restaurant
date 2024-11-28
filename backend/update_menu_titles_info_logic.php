<?php
session_start();
require 'db.php';

// MENU TITLES
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_SESSION["user_id"])) && isset($_POST['submit_update_menu_titles_info'])) {

    $menu_titles_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

    $menu_small_top_title = filter_var($_POST['menu_small_top_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $menu_main_title = filter_var($_POST['menu_main_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $menu_sub_title = filter_var($_POST['menu_sub_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    

        $update_menu_titles_info_query = "UPDATE menu_titles SET menu_small_top_title = '$menu_small_top_title',  menu_main_title = '$menu_main_title', menu_sub_title = '$menu_sub_title' WHERE id = $menu_titles_info_id;";

        $menu_titles_info_result = mysqli_query($conn, $update_menu_titles_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_menu_item_info.php');
            die();
            } else {
                header('location: ../index.php');
                die();
            }
        }
    
