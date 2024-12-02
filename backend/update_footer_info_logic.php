<?php
session_start();
require 'db.php';
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_footer_titles_info'])) {

    $footer_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $footer_main_title = filter_var($_POST['footer_main_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $footer_sub_title = filter_var($_POST['footer_sub_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);


    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

    // $fileName = $_FILES["image"]["name"];

        $update_footer_info_query = "UPDATE footer SET footer_main_title = '$footer_main_title', footer_sub_title = '$footer_sub_title' WHERE id = $footer_info_id;";

        $footer_info_result = mysqli_query($conn, $update_footer_info_query);

        if(!mysqli_errno($conn)) {
               header ('location: ../edit_footer_info.php');
            die();
            } else {
                header('location: ../index.php');
                die();
     }
}

if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_footer_social_media_info'])) {

    $footer_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $footer_facebook = filter_var($_POST['footer_facebook'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $footer_instagram = filter_var($_POST['footer_instagram'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $footer_youtube = filter_var($_POST['footer_youtube'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $footer_google_map = filter_var($_POST['footer_google_map'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);


    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

    // $fileName = $_FILES["image"]["name"];

        $update_footer_info_query = "UPDATE footer SET footer_facebook = '$footer_facebook', footer_instagram = '$footer_instagram', footer_youtube = '$footer_youtube', footer_google_map = '$footer_google_map' WHERE id = $footer_info_id;";

        $footer_info_result = mysqli_query($conn, $update_footer_info_query);

        if(!mysqli_errno($conn)) {
               header ('location: ../edit_footer_info.php');
            die();
            } else {
                header ('location: ../edit_footer_info.php');
                die();
     }
}
