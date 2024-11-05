<?php
session_start();
require 'db.php';
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    reservation('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_reservations_titles_info'])) {

    $reservation_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $reservation_title = filter_var($_POST['reservation_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $reservation_text = filter_var($_POST['reservation_text'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);


    // $fileName = $_FILES["image"]["name"];

        $update_reservation_info_query = "UPDATE reservations SET reservation_title = '$reservation_title', reservation_text = '$reservation_text' WHERE id = $reservation_info_id;";

        $reservation_info_result = mysqli_query($conn, $update_reservation_info_query);

        if(!mysqli_errno($conn)) {
            header ('location: ../edit_reservations_info.php');
            die();
            } else {
                header ('location: ../index.php');
                die();
            }
}