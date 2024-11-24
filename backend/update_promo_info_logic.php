<?php
session_start();
require 'db.php';

// PROMO TITLES
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))  && isset($_POST['submit_update_promo_titles_info'])) {
    // exit("GET request method required");
    header('location: edit_promo_info.php');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_SESSION["user_id"])) && isset($_POST['submit_update_promo_titles_info'])) {

    // $fileName = $_FILES["image"]["name"];
    $promo_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $small_top_title = filter_var($_POST['small_top_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $main_title = filter_var($_POST['main_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sub_title = filter_var($_POST['sub_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

        $update_promo_info_query = "UPDATE promotions SET small_top_title = '$small_top_title',  main_title = '$main_title', sub_title = '$sub_title' WHERE id = $promo_info_id;";

        $promo_info_result = mysqli_query($conn, $update_promo_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_promo_info.php');
            die();
            } else {
                header('location: ../edit_promo_info');
                die();
            }
        // }
    }
// }

// PROMO IMG 1
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"])) && (isset($_POST['submit_update_promo_img_1']))) {
   
    $_SESSION["empty_image_1"] = 'image NOT changed... click edit and choose an image.';
    header('location: ../edit_promo_info#promo-img-1');

} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_promo_img_1']) && (isset($_SESSION["user_id"])) && (!empty($_FILES["image"]["name"]))) {

    unset ($_SESSION['empty_image_1']);

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
                header('location: ../edit_promo_info.php');
                die();
            }
        }
    }
}

// PROMO TEXT 1
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
                header('location: ../edit_promo_info.php');
                die();
            }
        // }
    }
// }


// PROMO IMAGE 2
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"])) && isset($_POST['submit_update_promo_img_2'])) {
   
    $_SESSION["empty_image_2"] = 'image NOT changed... click edit and choose an image.';
    header('location: ../edit_promo_info#promo-img-2');
    
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_promo_img_2']) && (!empty($_FILES["image"]["name"]))) {

    unset ($_SESSION['empty_image_2']);

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
    

        $update_promo_info_query = "UPDATE promotions SET promo_img_2 = '$fileName',  promo_img_desc_2 = '$promo_img_desc_2' WHERE id = $promo_info_id;";

        $promo_info_result = mysqli_query($conn, $update_promo_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_promo_info.php');
            die();
            } else {
                header('location: ../edit_promo_info.php');
                die();
            }
        }
    }
}



// PROMO TEXT 2
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {

} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_promo_info_2'])) {
    
    // $fileName = $_FILES["image"]["name"];
    $promo_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $promo_img_title_2 = filter_var($_POST['promo_img_title_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $promo_img_text_2 = filter_var($_POST['promo_img_text_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

        $update_promo_info_query = "UPDATE promotions SET promo_img_title_2 = '$promo_img_title_2',  promo_img_text_2 = '$promo_img_text_2' WHERE id = $promo_info_id;";

        $promo_info_result = mysqli_query($conn, $update_promo_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_promo_info.php');
            die();
            } else {
                header('location: ../edit_promo_info.php');
                die();
            }
        // }
    }
// }

// PROMO IMAGE 3
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"])) && isset($_POST['submit_update_promo_img_3'])) {
    
    $_SESSION["empty_image_3"] = 'image NOT changed... click edit and choose an image.';
    header('location: ../edit_promo_info#promo-img-3');

} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_promo_img_3']) && (!empty($_FILES["image"]["name"]))) {

    unset ($_SESSION['empty_image_3']);

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
    

        $update_promo_info_query = "UPDATE promotions SET promo_img_3 = '$fileName',  promo_img_desc_3 = '$promo_img_desc_3' WHERE id = $promo_info_id;";

        $promo_info_result = mysqli_query($conn, $update_promo_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_promo_info.php');
            die();
            } else {
                header('location: ../edit_promo_info.php');
                die();
            }
        }
    }
}



// PROMO TEXT 3
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_promo_info_3'])) {

    $promo_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $promo_img_title_3 = filter_var($_POST['promo_img_title_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $promo_img_text_3 = filter_var($_POST['promo_img_text_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

        $update_promo_info_query = "UPDATE promotions SET promo_img_title_3 = '$promo_img_title_3',  promo_img_text_3 = '$promo_img_text_3' WHERE id = $promo_info_id;";

        $promo_info_result = mysqli_query($conn, $update_promo_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_promo_info.php');
            die();
            } else {
                header('location: ../edit_promo_info.php');
                die();
            }
    }