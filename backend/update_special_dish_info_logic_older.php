<?php
session_start();
require 'db.php';

// SPECIAL DISH IMG
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    exit("failing on logged in user");
    // header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_SESSION["user_id"])) && isset($_POST['submit_update_special_dish_img']) && (empty($_FILES["image"]["name"]))) {

    exit("faling at image is empty");

} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_special_dish_img']) && (isset($_SESSION["user_id"])) &&(!empty($_FILES["image"]["name"]))) {
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
            header('location: ../edit_special_dish_info.php');
            die();
            } else {
                header('location: ../index.php');
                die();
            }
        }
    }
}



// special_dish TEXT
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    exit("GET request method required");
    // header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_special_dish_info'])) {
    

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

        $spical_dish_info_result = mysqli_query($conn, $update_special_info_query);

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


// special_dish IMAGE 2
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_special_dish_img_2'])) {

    $special_dish_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $fileName = $_FILES["image"]["name"];
    $special_dish_img_desc_2 = filter_var($_POST['special_dish_img_desc_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);


    

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_special_dish_info_query = "UPDATE special_dishtions SET special_dish_img_2 = '$fileName',  special_dish_img_desc_2 = '$special_dish_img_desc_2' WHERE id = $special_dish_info_id;";

        $special_dish_info_result = mysqli_query($conn, $update_special_dish_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_special_dish_info.php');
            die();
            } else {
                header('location: ../index.php');
                die();
            }
        }
    }
}



// special_dishTIONS TEXT 2
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_special_dish_info_2'])) {

    

    // $fileName = $_FILES["image"]["name"];
    $special_dish_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $special_dish_img_title_2 = filter_var($_POST['special_dish_img_title_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $special_dish_img_text_2 = filter_var($_POST['special_dish_img_text_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

        $update_special_dish_info_query = "UPDATE special_dishtions SET special_dish_img_title_2 = '$special_dish_img_title_2',  special_dish_img_text_2 = '$special_dish_img_text_2' WHERE id = $special_dish_info_id;";

        $special_dish_info_result = mysqli_query($conn, $update_special_dish_info_query);

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

// special_dish IMAGE 3
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_special_dish_img_3'])) {

    $special_dish_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $fileName = $_FILES["image"]["name"];
    $special_dish_img_desc_3 = filter_var($_POST['special_dish_img_desc_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES); 

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_special_dish_info_query = "UPDATE special_dishtions SET special_dish_img_3 = '$fileName',  special_dish_img_desc_3 = '$special_dish_img_desc_3' WHERE id = $special_dish_info_id;";

        $special_dish_info_result = mysqli_query($conn, $update_special_dish_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_special_dish_info.php');
            die();
            } else {
                header('location: ../index.php');
                die();
            }
        }
    }
}



// special_dish TEXT 3
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_special_dish_info_3'])) {

    $special_dish_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $special_dish_img_title_3 = filter_var($_POST['special_dish_img_title_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $special_dish_img_text_3 = filter_var($_POST['special_dish_img_text_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

        $update_special_dish_info_query = "UPDATE special_dish SET special_dish_img_title_3 = '$special_dish_img_title_3',  special_dish_img_text_3 = '$special_dish_img_text_3' WHERE id = $special_dish_info_id;";

        $special_dish_info_result = mysqli_query($conn, $update_special_dish_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_special_dish_info.php');
            die();
            } else {
                header('location: ../index.php');
                die();
            }
    }