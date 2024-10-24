<?php
session_start();
require 'db.php';

// UPCOMING EVENTS IMG 1
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"])) && isset($_POST["submit_update_upcoming_events_img_1"])) {
    //8056377249 voice mail
    $_SESSION["empty_image_1"] = 'image NOT changed... click edit and choose an image.';
    header('location: ../edit_upcoming_events_info#edit-img-1');
       
} elseif (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_SESSION["user_id"])) && (!empty($_FILES["image"]["name"])) && isset($_POST["submit_update_upcoming_events_img_1"])) {
    
    unset ($_SESSION['empty_image_1']);

    

    $upcoming_events_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $fileName = $_FILES["image"]["name"];
    $upcoming_events_img_desc_1 = filter_var($_POST['upcoming_events_img_desc_1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif", "webp");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_upcoming_events_info_query = "UPDATE upcoming_events SET upcoming_events_img_1 = '$fileName',  upcoming_events_img_desc_1 = '$upcoming_events_img_desc_1' WHERE id = $upcoming_events_info_id;";

        $upcoming_events_info_result = mysqli_query($conn, $update_upcoming_events_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_upcoming_events_info#edit-img-1');
            die();
            } 
        }
    }
}

// UPCOMING EVENTS TITLE & TEXT 1
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_SESSION["user_id"])) && (isset($_POST['submit_update_upcoming_events_info_1']))) {

    // $fileName = $_FILES["image"]["name"];
    $upcoming_events_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

    $upcoming_events_img_title_1 = filter_var($_POST['upcoming_events_img_title_1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $upcoming_events_img_text_1 = filter_var($_POST['upcoming_events_img_text_1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

        $update_upcoming_events_info_query = "UPDATE upcoming_events SET upcoming_events_img_title_1 = '$upcoming_events_img_title_1',  upcoming_events_img_text_1 = '$upcoming_events_img_text_1' WHERE id = $upcoming_events_info_id;";

        $upcoming_events_info_result = mysqli_query($conn, $update_upcoming_events_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_upcoming_events_info#edit-info-1');
            die();
            } else {
                header('location: ../edit_upcoming_events_info#edit-info-1');
                die();
            }
        // }
    }
// }

// UPCOMING EVENTS IMG 2
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"])) && isset($_POST["submit_update_upcoming_events_img_2"])) {
    //8056377249 voice mail
    $_SESSION["empty_image_2"] = 'image NOT changed... click edit and choose an image.';
    header('location: ../edit_upcoming_events_info#edit-img-2');
       
} elseif (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_SESSION["user_id"])) && (!empty($_FILES["image"]["name"])) && isset($_POST["submit_update_upcoming_events_img_2"])) {
    
    unset ($_SESSION['empty_image_2']);

    

    $upcoming_events_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $fileName = $_FILES["image"]["name"];
    $upcoming_events_img_desc_2 = filter_var($_POST['upcoming_events_img_desc_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif", "webp");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_upcoming_events_info_query = "UPDATE upcoming_events SET upcoming_events_img_2 = '$fileName',  upcoming_events_img_desc_2 = '$upcoming_events_img_desc_2' WHERE id = $upcoming_events_info_id;";

        $upcoming_events_info_result = mysqli_query($conn, $update_upcoming_events_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_upcoming_events_info#edit-img-2');
            die();
            } 
        }
    }
}

// UPCOMING EVENTS TITLE & TEXT 2
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_SESSION["user_id"])) && (isset($_POST['submit_update_upcoming_events_info_2']))) {

    // $fileName = $_FILES["image"]["name"];
    $upcoming_events_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

    $upcoming_events_img_title_2 = filter_var($_POST['upcoming_events_img_title_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $upcoming_events_img_text_2 = filter_var($_POST['upcoming_events_img_text_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

        $update_upcoming_events_info_query = "UPDATE upcoming_events SET upcoming_events_img_title_2 = '$upcoming_events_img_title_2',  upcoming_events_img_text_2 = '$upcoming_events_img_text_2' WHERE id = $upcoming_events_info_id;";

        $upcoming_events_info_result = mysqli_query($conn, $update_upcoming_events_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_upcoming_events_info#edit-info-2');
            die();
            } else {
                header('location: ../edit_upcoming_events_info#edit-info-2');
                die();
        }
    }

// UPCOMING EVENTS IMG 3
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"])) && isset($_POST["submit_update_upcoming_events_img_3"])) {
    //8056377249 voice mail
    $_SESSION["empty_image_3"] = 'image NOT changed... click edit and choose an image.';
    header('location: ../edit_upcoming_events_info#edit-img-3');
       
} elseif (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_SESSION["user_id"])) && (!empty($_FILES["image"]["name"])) && isset($_POST["submit_update_upcoming_events_img_3"])) {
    
    unset ($_SESSION['empty_image_3']);

    

    $upcoming_events_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $fileName = $_FILES["image"]["name"];
    $upcoming_events_img_desc_3 = filter_var($_POST['upcoming_events_img_desc_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif", "webp");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_upcoming_events_info_query = "UPDATE upcoming_events SET upcoming_events_img_3 = '$fileName',  upcoming_events_img_desc_3 = '$upcoming_events_img_desc_3' WHERE id = $upcoming_events_info_id;";

        $upcoming_events_info_result = mysqli_query($conn, $update_upcoming_events_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_upcoming_events_info#edit-img-3');
            die();
            } 
        }
    }
}

// UPCOMING EVENTS TITLE & TEXT 3
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_SESSION["user_id"])) && (isset($_POST['submit_update_upcoming_events_info_3']))) {

    // $fileName = $_FILES["image"]["name"];
    $upcoming_events_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

    $upcoming_events_img_title_3 = filter_var($_POST['upcoming_events_img_title_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $upcoming_events_img_text_3 = filter_var($_POST['upcoming_events_img_text_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

        $update_upcoming_events_info_query = "UPDATE upcoming_events SET upcoming_events_img_title_3 = '$upcoming_events_img_title_3',  upcoming_events_img_text_3 = '$upcoming_events_img_text_3' WHERE id = $upcoming_events_info_id;";

        $upcoming_events_info_result = mysqli_query($conn, $update_upcoming_events_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_upcoming_events_info#edit-info-3');
            die();
            } else {
                header('location: ../edit_upcoming_events_info#edit-info-3');
                die();
        }
    }


// UPCOMING EVENTS SMALL TOP TITLE & MAIN TITLE
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_SESSION["user_id"])) && (isset($_POST['submit_update_upcoming_events_titles_info']))) {

    // $fileName = $_FILES["image"]["name"];
    $upcoming_events_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

    $upcoming_events_small_top_title = filter_var($_POST['upcoming_events_small_top_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $upcoming_events_main_title = filter_var($_POST['upcoming_events_main_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

        $update_upcoming_events_info_query = "UPDATE upcoming_events SET upcoming_events_small_top_title = '$upcoming_events_small_top_title',  upcoming_events_main_title = '$upcoming_events_main_title' WHERE id = $upcoming_events_info_id;";

        $upcoming_events_info_result = mysqli_query($conn, $update_upcoming_events_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_upcoming_events_info#edit-titles');
            die();
            } else {
                header('location: ../edit_upcoming_events_info#edit-titles');
                die();
            }
        // }
    }
// }

