<?php
session_start();
require 'db.php';
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_header_info'])) {

    $header_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $header_business_title = filter_var($_POST['header_business_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $business_name_font = filter_var($_POST['business_name_font'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $street_address = filter_var($_POST['street_address'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $business_hours_mon = filter_var($_POST['business_hours_mon'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $business_hours_tue = filter_var($_POST['business_hours_tue'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $business_hours_wed = filter_var($_POST['business_hours_wed'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $business_hours_thur = filter_var($_POST['business_hours_thur'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $business_hours_fri = filter_var($_POST['business_hours_fri'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $business_hours_sat = filter_var($_POST['business_hours_sat'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $business_hours_sun = filter_var($_POST['business_hours_sun'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);


    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);


    // $fileName = $_FILES["image"]["name"];

        $update_header_info_query = "UPDATE header_info SET header_business_title = '$header_business_title', business_name_font = '$business_name_font', street_address = '$street_address', business_hours_mon = '$business_hours_mon', business_hours_tue = '$business_hours_tue', business_hours_wed = '$business_hours_wed', business_hours_thur = '$business_hours_thur', business_hours_fri = '$business_hours_fri', business_hours_sat = '$business_hours_sat', business_hours_sun = '$business_hours_sun', phone = '$phone', email = '$email' WHERE id = $header_info_id;";

        $header_info_result = mysqli_query($conn, $update_header_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_header_info.php');
            die();
            } else {
                header('location: ../index.php');
                die();
            }
}



