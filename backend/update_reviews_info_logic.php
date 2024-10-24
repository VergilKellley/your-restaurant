<?php
session_start();
require 'db.php';

// REVIEWS BACKGROUND IMG
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"])) && isset($_POST["submit_reviews_bkgd_img"])) {
    //8056377249 voice mail
    $_SESSION["empty_bkgd_image"] = 'image NOT changed... click edit and choose an image.';
    header('location: ../edit_reviews_info#edit-bkgd-img');
       
} elseif (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_SESSION["user_id"])) && (!empty($_FILES["image"]["name"])) && isset($_POST["submit_reviews_bkgd_img"])) {
    
    unset ($_SESSION['empty_bkgd_image']);

    

    $reviews_bkgd_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $fileName = $_FILES["image"]["name"];
    $reviews_bkgd_img_desc = filter_var($_POST['reviews_bkgd_img_desc'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_reviews_bkgd_info_query = "UPDATE reviews SET reviews_bkgd_img = '$fileName',  reviews_bkgd_img_desc = '$reviews_bkgd_img_desc' WHERE id = $reviews_bkgd_info_id;";

        $reviews_bkgd_info_result = mysqli_query($conn, $update_reviews_bkgd_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_reviews_info');
            die();
            } 
        }
    }
} 


// REVIEW
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) && isset($_POST['submit_update_reviews_info'])) {
    // exit("GET request method required");
    header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_SESSION["user_id"])) && isset($_POST['submit_update_reviews_info'])) {



    // $fileName = $_FILES["image"]["name"];
    $review_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $review = filter_var($_POST['review'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

        $review_info_query = "UPDATE reviews SET review = '$review' WHERE id = $review_info_id;";

        $review_result = mysqli_query($conn, $review_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_reviews_info.php');
            die();
            } else {
                header('location: ../edit_reviews_bkgd_info.php');
                die();
            }
        // }
    }
// }

// REVIEWS SMALL IMG
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"])) && isset($_POST["submit_reviews_small_img"])) {
    //8056377249 voice mail
    $_SESSION["empty_small_image"] = 'image NOT changed... click edit and choose an image.';
    header('location: ../edit_reviews_info#edit-small-img');

       
} elseif (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_SESSION["user_id"])) && (!empty($_FILES["image"]["name"])) && isset($_POST["submit_reviews_small_img"])) {
    
    unset ($_SESSION['empty_small_image']);

    

    $reviews_bkgd_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $fileName = $_FILES["image"]["name"];

    $reviews_small_img_desc = filter_var($_POST['reviews_small_img_desc'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $reviews_small_img_text = filter_var($_POST['reviews_small_img_text'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif", "webp");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_reviews_bkgd_info_query = "UPDATE reviews SET reviews_small_img = '$fileName',  reviews_small_img_desc = '$reviews_small_img_desc', reviews_small_img_text = '$reviews_small_img_text' WHERE id = $reviews_bkgd_info_id;";

        $reviews_bkgd_info_result = mysqli_query($conn, $update_reviews_bkgd_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_reviews_info');
            die();
            } 
        }
    }
}
