<?php
session_start();
require 'db.php';

// SPECIAL DISH IMG
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"])) && isset($_POST['submit_update_special_dish_img'])) {

    $_SESSION["empty_image"] = 'image NOT changed... click edit and choose an image.';
    header('location: ../edit_special_dish_info#special-dish-img');
       
} elseif (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_SESSION["user_id"])) && (!empty($_FILES["image"]["name"])) && isset($_POST['submit_update_special_dish_img'])) {
    
    unset ($_SESSION['empty_image']);

    $special_dish_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $fileName = $_FILES["image"]["name"];
    $special_dish_img_desc = filter_var($_POST['special_dish_img_desc'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_special_dish_info_query = "UPDATE special_dish SET special_dish_img = '$fileName',  special_dish_img_desc = '$special_dish_img_desc' WHERE id = $special_dish_info_id;";

        $special_dish_info_result = mysqli_query($conn, $update_special_dish_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_special_dish_info');
            die();
            } 
        }
    }
} elseif (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"])) && isset($_POST['submit_update_special_dish_bkgd_img'])) {

    $_SESSION["empty_bkgd_image"] = 'background image NOT changed... click edit and choose an image.';
    header('location: ../edit_special_dish_info#special-dish-bkgd-img');
       
} elseif (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_SESSION["user_id"])) && (!empty($_FILES["image"]["name"])) && isset($_POST['submit_update_special_dish_bkgd_img'])) {

    unset ($_SESSION['empty_image']);

    $special_dish_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $fileName = $_FILES["image"]["name"];
    $special_dish_img_desc = filter_var($_POST['special_dish_bkgd_img_desc'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_special_dish_info_query = "UPDATE special_dish SET special_dish_bkgd_img = '$fileName',  special_dish_bkgd_img_desc = '$special_dish_img_desc' WHERE id = $special_dish_info_id;";

        $special_dish_info_result = mysqli_query($conn, $update_special_dish_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_special_dish_info');
            die();
            } else {
                // header('location: update_special_dish_img.php');
                die();
            }
        }
    }
}



// SPECIAL DISH TEXT
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    exit("GET request method required");
    // header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_special_dish_info'])) {

    unset ($_SESSION['empty_image']);

    // $fileName = $_FILES["image"]["name"];
    $special_dish_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $special_dish_small_title = filter_var($_POST['special_dish_small_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $special_dish_main_title = filter_var($_POST['special_dish_main_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $special_dish_text = filter_var($_POST['special_dish_text'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $special_dish_old_price = filter_var($_POST['special_dish_old_price'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $special_dish_sale_price = filter_var($_POST['special_dish_sale_price'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

        $update_special_dish_info_query = "UPDATE special_dish SET special_dish_small_title = '$special_dish_small_title',  special_dish_main_title = '$special_dish_main_title', special_dish_text = '$special_dish_text', special_dish_old_price = '$special_dish_old_price', special_dish_sale_price = '$special_dish_sale_price' WHERE id = $special_dish_info_id;";

        $spical_dish_info_result = mysqli_query($conn, $update_special_dish_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_special_dish_info.php');
            die();
            } else {
                header('location: ../index.php');
                die();
            }
        // }
    }
// }