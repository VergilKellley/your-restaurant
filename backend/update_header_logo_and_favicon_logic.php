<?php
session_start();
require 'db.php';

if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_header_logo_and_favicon']) && (isset($_SESSION["user_id"]))) {

    if (empty($_FILES["image"]["name"])){
        header('location: ../edit_header_info.php');

    } else {

    $header_logo_and_favicon_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);
    $fileName = $_FILES["image"]["name"];
    $header_logo_and_favicon_desc = filter_var($_POST['header_logo_and_favicon_desc'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $header_logo_and_favicon_title = filter_var($_POST['header_logo_and_favicon_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_header_logo_and_favicon_query = "UPDATE header_logo_and_favicon SET header_logo_and_favicon  = '$fileName', header_logo_and_favicon_desc = '$header_logo_and_favicon_desc', header_logo_and_favicon_title = '$header_logo_and_favicon_title' WHERE id = '$header_logo_and_favicon_id';";

        $header_info_result = mysqli_query($conn, $update_header_logo_and_favicon_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_header_info.php');
            die();
            } else {
                header('location: ../index.php');
                die();
            }
        }
    }
}
}