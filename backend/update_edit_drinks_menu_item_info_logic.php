<?php
session_start();
require 'db.php';

// SPECIAL DISH IMG
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"])) && isset($_POST["submit_update_drinks_menu_item_img"])) {
    //8056377249 voice mail
    $_SESSION["empty_image"] = 'image NOT changed... click edit and choose an image.';
    header('location: ../edit_drinks_menu_item_info#edit-img');
       
} elseif (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_SESSION["user_id"])) && (!empty($_FILES["image"]["name"])) && isset($_POST["submit_update_drinks_menu_item_img"])) {
   
    unset ($_SESSION['empty_image']);

    

    $drinks_menu_item_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $fileName = $_FILES["image"]["name"];
    $drinks_menu_item_img_desc = filter_var($_POST['drinks_menu_item_img_desc'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_menu_item_info_query = "UPDATE menu_item SET drinks_menu_item_img = '$fileName',  drinks_menu_item_img_desc = '$drinks_menu_item_img_desc' WHERE id = $drinks_menu_item_info_id;";

        $menu_item_info_result = mysqli_query($conn, $update_menu_item_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_drinks_menu_item_info');
            die();
            } 
        }
    }
}

// EDIT MENU ITEM INFO TEXT 1
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_SESSION["user_id"])) && isset($_POST['submit_update_drinks_menu_item_info'])) {
    
    // $fileName = $_FILES["image"]["name"];
    $drinks_menu_item_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $drinks_menu_item_num = filter_var($_POST['drinks_menu_item_num'], FILTER_SANITIZE_NUMBER_INT);
    $drinks_menu_item_name = filter_var($_POST['drinks_menu_item_name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $drinks_menu_item_desc = filter_var($_POST['drinks_menu_item_desc'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $drinks_menu_item_price = filter_var($_POST['drinks_menu_item_price'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $drinks_menu_item_text = filter_var($_POST['drinks_menu_item_text'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

        $update_menu_item_info_query = "UPDATE menu_item SET drinks_menu_item_num = '$drinks_menu_item_num',  drinks_menu_item_name = '$drinks_menu_item_name', drinks_menu_item_desc = '$drinks_menu_item_desc', drinks_menu_item_price = '$drinks_menu_item_price', drinks_menu_item_text = '$drinks_menu_item_text' WHERE id = $drinks_menu_item_info_id;";

        $menu_item_info_result = mysqli_query($conn, $update_menu_item_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_drinks_menu_item_info.php');
            die();
            } else {
                header('location: ../edit_drinks_menu_item_info.php');
                die();
            }
    }


