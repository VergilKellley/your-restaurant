<?php
session_start();
require 'db.php';

// PROMO IMG 1
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_promo_img_1'])) {

    $promo_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $fileName = $_FILES["image"]["name"];
    $promo_img_desc_1 = filter_var($_POST['promo_img_desc_1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);


    

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_promo_info_query = "UPDATE promotions SET promo_img_1 = '$fileName',  promo_img_desc_1 = '$promo_img_desc_1' WHERE id = $promo_info_id;";

        $promo_info_result = mysqli_query($conn, $update_promo_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_promo_info.php');
            die();
            } else {
                header('location: ../index.php');
                die();
            }
        }
    }
}

// PROMOTIONS TEXT 1
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_promo_info_1'])) {

    

    // $fileName = $_FILES["image"]["name"];
    $promo_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $promo_img_title_1 = filter_var($_POST['promo_img_title_1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $promo_img_text_1 = filter_var($_POST['promo_img_text_1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

        $update_promo_info_query = "UPDATE promotions SET promo_img_title_1 = '$promo_img_title_1',  promo_img_text_1 = '$promo_img_text_1' WHERE id = $promo_info_id;";

        $promo_info_result = mysqli_query($conn, $update_promo_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_promo_info.php');
            die();
            } else {
                header('location: ../index.php');
                die();
            }
        // }
    }
// }


// HERO IMAGE 2
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_promo_img_2'])) {

    $promo_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $fileName = $_FILES["image"]["name"];
    $promo_img_desc_2 = filter_var($_POST['promo_img_desc_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);


    

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_promo_info_query = "UPDATE promo_img_2 SET promo_img_2 = '$fileName',  promo_img_desc_2 = '$promo_img_desc_2' WHERE id = $promo_info_id;";

        $promo_info_result = mysqli_query($conn, $update_promo_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_promo_info.php');
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
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_promo_info_2'])) {

    // $fileName = $_FILES["image"]["name"];
    $promo_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    // $promo_img_desc_2 = filter_var($_POST['promo_img_desc_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $promo_top_text_2 = filter_var($_POST['promo_top_text_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $promo_large_text_2 = filter_var($_POST['promo_large_text_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $promo_bottom_text_2 = filter_var($_POST['promo_bottom_text_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $promo_top_btn_text_2 = filter_var($_POST['promo_top_btn_text_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $promo_top_btn_link_2 = filter_var($_POST['promo_top_btn_link_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $promo_bottom_btn_text_2 = filter_var($_POST['promo_bottom_btn_text_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $promo_bottom_btn_link_2 = filter_var($_POST['promo_bottom_btn_link_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    

        $update_promo_info_query = "UPDATE promo_info_2 SET promo_top_text_2 = '$promo_top_text_2',  promo_large_text_2 = '$promo_large_text_2', promo_bottom_text_2 = '$promo_bottom_text_2', promo_top_btn_text_2 = '$promo_top_btn_text_2', promo_top_btn_link_2 = '$promo_top_btn_link_2', promo_bottom_btn_text_2 = '$promo_bottom_btn_text_2', promo_bottom_btn_link_2 = '$promo_bottom_btn_link_2' WHERE id = $promo_info_id;";

        $promo_info_result = mysqli_query($conn, $update_promo_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_promo_info.php');
            die();
            } else {
                header('location: ../index.php');
                die();
            }
        // }
    }
// }



// HERO IMAGE 3
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_promo_img_3'])) {

    $promo_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $fileName = $_FILES["image"]["name"];
    $promo_img_desc_3 = filter_var($_POST['promo_img_desc_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);


    

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_promo_info_query = "UPDATE promo_img_3 SET promo_img_3 = '$fileName',  promo_img_desc_3 = '$promo_img_desc_3' WHERE id = $promo_info_id;";

        $promo_info_result = mysqli_query($conn, $update_promo_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_promo_info.php');
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
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_promo_info_3'])) {

    // $fileName = $_FILES["image"]["name"];
    $promo_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    // $promo_img_desc_3 = filter_var($_POST['promo_img_desc_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $promo_top_text_3 = filter_var($_POST['promo_top_text_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $promo_large_text_3 = filter_var($_POST['promo_large_text_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $promo_bottom_text_3 = filter_var($_POST['promo_bottom_text_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $promo_top_btn_text_3 = filter_var($_POST['promo_top_btn_text_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $promo_top_btn_link_3 = filter_var($_POST['promo_top_btn_link_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $promo_bottom_btn_text_3 = filter_var($_POST['promo_bottom_btn_text_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $promo_bottom_btn_link_3 = filter_var($_POST['promo_bottom_btn_link_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    

        $update_promo_info_query = "UPDATE promo_info_3 SET promo_top_text_3 = '$promo_top_text_3',  promo_large_text_3 = '$promo_large_text_3', promo_bottom_text_3 = '$promo_bottom_text_3', promo_top_btn_text_3 = '$promo_top_btn_text_3', promo_top_btn_link_3 = '$promo_top_btn_link_3', promo_bottom_btn_text_3 = '$promo_bottom_btn_text_3', promo_bottom_btn_link_3 = '$promo_bottom_btn_link_3' WHERE id = $promo_info_id;";

        $promo_info_result = mysqli_query($conn, $update_promo_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_promo_info.php');
            die();
            } else {
                header('location: ../index.php');
                die();
            }
        // }
    }
// }
