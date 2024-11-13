<?php 
session_start();
require 'db.php';

if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    header("Location: ../index");
    die();

} elseif (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_SESSION["user_id"])) && (empty($_FILES["image"]["name"])) && (isset($_POST['submit_add_new_dessert_menu_item']))) {
    $_SESSION["empty_image"] = 'You MUST choose an image to add a menu item.';
    header("Location: ../add_dessert_menu_item#add-menu-item");

} elseif (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_SESSION["user_id"])) && (!empty($_FILES["image"]["name"])) && (isset($_POST['submit_add_new_dessert_menu_item']))) {

    unset ($_SESSION['empty_image']);

    $dessert_menu_item_num = $_POST["dessert_menu_item_num"];
    $dessert_menu_item_name = $_POST["dessert_menu_item_name"];
    $dessert_menu_item_desc = $_POST["dessert_menu_item_desc"];
    $dessert_menu_item_price = $_POST["dessert_menu_item_price"];
    $dessert_menu_item_text = $_POST["dessert_menu_item_text"];
    $fileName = $_FILES["image"]["name"];
    $dessert_menu_item_img_desc = $_POST["dessert_menu_item_img_desc"];

    
    // use below if text has quotes
    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif", "webp");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
            $sql = "INSERT INTO menu_item (dessert_menu_item_num, dessert_menu_item_name, dessert_menu_item_desc, dessert_menu_item_price, dessert_menu_item_text, dessert_menu_item_img, dessert_menu_item_img_desc) VALUES ('$dessert_menu_item_num','$dessert_menu_item_name', '$dessert_menu_item_desc', '$dessert_menu_item_price', '$dessert_menu_item_text', '$fileName', '$dessert_menu_item_img_desc')";
            if(mysqli_query($conn, $sql)){
                // echo "Your image has been uploaded";
                header("Location: ../add_dessert_menu_item");
                die();
            } else {
                echo "Image was not uploaded";
            }
        }
    }
} 