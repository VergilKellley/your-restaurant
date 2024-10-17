<?php
session_start();
require 'db.php';

// ABOUT SMALL IMG
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"])) && isset($_POST['submit_update_about_small_img'])) {

    $_SESSION["empty_image"] = 'image NOT changed... click edit and choose an image.';
    header('location: ../edit_about_info#small-img');

} elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_about_small_img']) && (isset($_SESSION["user_id"]) && (!empty($_FILES["image"]["name"])))) {

    unset ($_SESSION['empty_image']);

    $about_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $fileName = $_FILES["image"]["name"];
    $about_small_img_desc = filter_var($_POST['about_small_img_desc'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_about_info_query = "UPDATE about SET about_small_img = '$fileName',  about_small_img_desc = '$about_small_img_desc' WHERE id = $about_info_id;";

        $about_info_result = mysqli_query($conn, $update_about_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_about_info.php');
            die();
            } else {
                header('location: ../index.php');
                die();
            }
        }
    }
}

// ABOUT LARGE IMG
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"])) && isset($_POST['submit_update_about_large_img'])) {

    $_SESSION["empty_large_image"] = 'image NOT changed... click edit and choose an image.';
    header('location: ../edit_about_info#large-img');

} elseif($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_SESSION["user_id"]) && (!empty($_FILES["image"]["name"]) && isset($_POST['submit_update_about_large_img'])))) {

    // unset ($_SESSION['empty_image']);

    $about_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $fileName = $_FILES["image"]["name"];
    $about_large_img_des = filter_var($_POST['about_large_img_desc'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_about_info_query = "UPDATE about SET about_large_img = '$fileName',  about_large_img_desc = '$about_large_img_desc' WHERE id = $about_info_id;";

        $about_info_result = mysqli_query($conn, $update_about_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_about_info.php');
            die();
            } else {
                header('location: ../index.php');
                die();
            }
        }
    }
}

// ABOUT TEXT
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) && isset($_POST['submit_update_about_info'])) {
    // exit("GET request method required");
    header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_SESSION["user_id"])) && isset($_POST['submit_update_about_info'])) {

    

    // $fileName = $_FILES["image"]["name"];
    $about_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $about_small_title = filter_var($_POST['about_small_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $about_main_title = filter_var($_POST['about_main_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $about_text = filter_var($_POST['about_text'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $about_sub_title = filter_var($_POST['about_sub_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $about_since_year = filter_var($_POST['about_since_year'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

        $update_about_info_query = "UPDATE about SET about_small_title = '$about_small_title',  about_main_title = '$about_main_title', about_text = '$about_text', about_sub_title = '$about_sub_title', about_since_year = '$about_since_year' WHERE id = $about_info_id;";

        $about_info_result = mysqli_query($conn, $update_about_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_about_info.php');
            die();
            } else {
                header('location: ../index.php');
                die();
            }
        // }
    }
// }


