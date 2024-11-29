<?php
session_start();
require 'db.php';

// HERO IMG 1
    if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"])) && (isset($_POST['submit_update_hero_img_1']))) {
   
        $_SESSION["empty_image_1"] = 'image NOT changed... click edit and choose an image.';
        header('location: ../edit_hero_info#hero-img-1');
    
    } elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_hero_img_1']) && (isset($_SESSION["user_id"])) && (!empty($_FILES["image"]["name"]))) {

    $hero_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $fileName = $_FILES["image"]["name"];
    $hero_img_desc_1 = filter_var($_POST['hero_img_desc_1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);


    

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_hero_info_query = "UPDATE hero_img_1 SET hero_img_1 = '$fileName',  hero_img_desc_1 = '$hero_img_desc_1' WHERE id = $hero_info_id;";

        $hero_info_result = mysqli_query($conn, $update_hero_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_hero_info.php');
            die();
            } else {
                header('location: ../index.php');
                die();
            }
        }
    }
}

// HERO INFO-TEXT 1
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_hero_info_1'])) {

    

    // $fileName = $_FILES["image"]["name"];
    $hero_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    // $hero_img_desc_1 = filter_var($_POST['hero_img_desc_1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $hero_top_text_1 = filter_var($_POST['hero_top_text_1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $hero_large_text_1 = filter_var($_POST['hero_large_text_1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $hero_bottom_text_1 = filter_var($_POST['hero_bottom_text_1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $hero_top_btn_text_1 = filter_var($_POST['hero_top_btn_text_1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $hero_top_btn_link_1 = filter_var($_POST['hero_top_btn_link_1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $hero_bottom_btn_text_1 = filter_var($_POST['hero_bottom_btn_text_1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $hero_bottom_btn_link_1 = filter_var($_POST['hero_bottom_btn_link_1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);


    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);


    // $fileName = $_FILES["image"]["name"];

    // $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    // $allowedTypes = array("jpeg", "jpg", "png", "gif");
    // $tempName = $_FILES["image"]["tmp_name"];
    // $targetPath = "../assets/images/".$fileName;
    // if(in_array($ext, $allowedTypes)) {
    //     if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_hero_info_query = "UPDATE hero_info_1 SET hero_top_text_1 = '$hero_top_text_1',  hero_large_text_1 = '$hero_large_text_1', hero_bottom_text_1 = '$hero_bottom_text_1', hero_top_btn_text_1 = '$hero_top_btn_text_1', hero_top_btn_link_1 = '$hero_top_btn_link_1', hero_bottom_btn_text_1 = '$hero_bottom_btn_text_1', hero_bottom_btn_link_1 = '$hero_bottom_btn_link_1' WHERE id = $hero_info_id;";

        $hero_info_result = mysqli_query($conn, $update_hero_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_hero_info.php');
            die();
            } else {
                header('location: ../index.php');
                die();
            }
        // }
    }
// }


// HERO IMAGE 2
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"])) && (isset($_POST['submit_update_hero_img_2']))) {
   
    $_SESSION["empty_image_2"] = 'image NOT changed... click edit and choose an image.';
    header('location: ../edit_hero_info#hero-img-2');

} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_hero_img_2']) && (isset($_SESSION["user_id"])) && (!empty($_FILES["image"]["name"]))) {

    $hero_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $fileName = $_FILES["image"]["name"];
    $hero_img_desc_2 = filter_var($_POST['hero_img_desc_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);


    

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_hero_info_query = "UPDATE hero_img_2 SET hero_img_2 = '$fileName',  hero_img_desc_2 = '$hero_img_desc_2' WHERE id = $hero_info_id;";

        $hero_info_result = mysqli_query($conn, $update_hero_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_hero_info.php');
            die();
            } else {
                header('location: ../index.php');
                die();
            }
        }
    }
}



// HERO INFO-TEXT 2
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_hero_info_2'])) {

    // $fileName = $_FILES["image"]["name"];
    $hero_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    // $hero_img_desc_2 = filter_var($_POST['hero_img_desc_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $hero_top_text_2 = filter_var($_POST['hero_top_text_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $hero_large_text_2 = filter_var($_POST['hero_large_text_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $hero_bottom_text_2 = filter_var($_POST['hero_bottom_text_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $hero_top_btn_text_2 = filter_var($_POST['hero_top_btn_text_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $hero_top_btn_link_2 = filter_var($_POST['hero_top_btn_link_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $hero_bottom_btn_text_2 = filter_var($_POST['hero_bottom_btn_text_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $hero_bottom_btn_link_2 = filter_var($_POST['hero_bottom_btn_link_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    

        $update_hero_info_query = "UPDATE hero_info_2 SET hero_top_text_2 = '$hero_top_text_2',  hero_large_text_2 = '$hero_large_text_2', hero_bottom_text_2 = '$hero_bottom_text_2', hero_top_btn_text_2 = '$hero_top_btn_text_2', hero_top_btn_link_2 = '$hero_top_btn_link_2', hero_bottom_btn_text_2 = '$hero_bottom_btn_text_2', hero_bottom_btn_link_2 = '$hero_bottom_btn_link_2' WHERE id = $hero_info_id;";

        $hero_info_result = mysqli_query($conn, $update_hero_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_hero_info.php');
            die();
            } else {
                header('location: ../index.php');
                die();
            }
        // }
    }
// }



// HERO IMAGE 3
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"])) && (isset($_POST['submit_update_hero_img_3']))) {
   
    $_SESSION["empty_image_3"] = 'image NOT changed... click edit and choose an image.';
    header('location: ../edit_hero_info#hero-img-3');

} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_hero_img_3']) && (isset($_SESSION["user_id"])) && (!empty($_FILES["image"]["name"]))) {

    $hero_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $fileName = $_FILES["image"]["name"];
    $hero_img_desc_3 = filter_var($_POST['hero_img_desc_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);


    

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_hero_info_query = "UPDATE hero_img_3 SET hero_img_3 = '$fileName',  hero_img_desc_3 = '$hero_img_desc_3' WHERE id = $hero_info_id;";

        $hero_info_result = mysqli_query($conn, $update_hero_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_hero_info.php');
            die();
            } else {
                header('location: ../index.php');
                die();
            }
        }
    }
}



// HERO INFO-TEXT 3
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_hero_info_3'])) {

    // $fileName = $_FILES["image"]["name"];
    $hero_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    // $hero_img_desc_3 = filter_var($_POST['hero_img_desc_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $hero_top_text_3 = filter_var($_POST['hero_top_text_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $hero_large_text_3 = filter_var($_POST['hero_large_text_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $hero_bottom_text_3 = filter_var($_POST['hero_bottom_text_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $hero_top_btn_text_3 = filter_var($_POST['hero_top_btn_text_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $hero_top_btn_link_3 = filter_var($_POST['hero_top_btn_link_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $hero_bottom_btn_text_3 = filter_var($_POST['hero_bottom_btn_text_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $hero_bottom_btn_link_3 = filter_var($_POST['hero_bottom_btn_link_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    

        $update_hero_info_query = "UPDATE hero_info_3 SET hero_top_text_3 = '$hero_top_text_3',  hero_large_text_3 = '$hero_large_text_3', hero_bottom_text_3 = '$hero_bottom_text_3', hero_top_btn_text_3 = '$hero_top_btn_text_3', hero_top_btn_link_3 = '$hero_top_btn_link_3', hero_bottom_btn_text_3 = '$hero_bottom_btn_text_3', hero_bottom_btn_link_3 = '$hero_bottom_btn_link_3' WHERE id = $hero_info_id;";

        $hero_info_result = mysqli_query($conn, $update_hero_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_hero_info.php');
            die();
            } else {
                header('location: ../index.php');
                die();
            }
        // }
    }
// }
