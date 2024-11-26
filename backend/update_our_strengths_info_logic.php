<?php
session_start();
require 'db.php';

// OUR STRENGTH IMG 1
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"])) && isset($_POST["submit_update_our_strengths_img_1"])) {
    //8056377249 voice mail
    $_SESSION["empty_image_1"] = 'image NOT changed... click edit and choose an image.';
    header('location: ../edit_our_strengths_info#edit-img-1');
       
} elseif (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_SESSION["user_id"])) && (!empty($_FILES["image"]["name"])) && isset($_POST["submit_update_our_strengths_img_1"])) {
    
    unset ($_SESSION['empty_image_1']);

    

    $our_strengths_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $fileName = $_FILES["image"]["name"];
    $our_strengths_img_desc_1 = filter_var($_POST['our_strengths_img_desc_1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif", "webp");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_our_strengths_info_query = "UPDATE our_strengths SET our_strengths_img_1 = '$fileName',  our_strengths_img_desc_1 = '$our_strengths_img_desc_1' WHERE id = $our_strengths_info_id;";

        $our_strengths_info_result = mysqli_query($conn, $update_our_strengths_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_our_strengths_info#edit-img-1');
            die();
            } 
        }
    }
}

// OUR STRENGTHS TITLE & TEXT 1
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_SESSION["user_id"])) && (isset($_POST['submit_update_our_strengths_info_1']))) {

    // $fileName = $_FILES["image"]["name"];
    $our_strengths_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

    $our_strengths_img_title_1 = filter_var($_POST['our_strengths_img_title_1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $our_strengths_img_text_1 = filter_var($_POST['our_strengths_img_text_1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

        $update_our_strengths_info_query = "UPDATE our_strengths SET our_strengths_img_title_1 = '$our_strengths_img_title_1',  our_strengths_img_text_1 = '$our_strengths_img_text_1' WHERE id = $our_strengths_info_id;";

        $our_strengths_info_result = mysqli_query($conn, $update_our_strengths_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_our_strengths_info#edit-info-1');
            die();
            } else {
                header('location: ../edit_our_strengths_info#edit-info-1');
                die();
            }
        // }
    }
// }

// OUR STRENGTHS IMG 2
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"])) && isset($_POST["submit_update_our_strengths_img_2"])) {
    //8056377249 voice mail
    $_SESSION["empty_image_2"] = 'image NOT changed... click edit and choose an image.';
    header('location: ../edit_our_strengths_info#edit-img-2');
       
} elseif (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_SESSION["user_id"])) && (!empty($_FILES["image"]["name"])) && isset($_POST["submit_update_our_strengths_img_2"])) {
    
    unset ($_SESSION['empty_image_2']);

    

    $our_strengths_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $fileName = $_FILES["image"]["name"];
    $our_strengths_img_desc_2 = filter_var($_POST['our_strengths_img_desc_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif", "webp");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_our_strengths_info_query = "UPDATE our_strengths SET our_strengths_img_2 = '$fileName',  our_strengths_img_desc_2 = '$our_strengths_img_desc_2' WHERE id = $our_strengths_info_id;";

        $our_strengths_info_result = mysqli_query($conn, $update_our_strengths_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_our_strengths_info#edit-img-2');
            die();
            } 
        }
    }
}

// OUR STRENGTHS TITLE & TEXT 2
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_SESSION["user_id"])) && (isset($_POST['submit_update_our_strengths_info_2']))) {

    // $fileName = $_FILES["image"]["name"];
    $our_strengths_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

    $our_strengths_img_title_2 = filter_var($_POST['our_strengths_img_title_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $our_strengths_img_text_2 = filter_var($_POST['our_strengths_img_text_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

        $update_our_strengths_info_query = "UPDATE our_strengths SET our_strengths_img_title_2 = '$our_strengths_img_title_2',  our_strengths_img_text_2 = '$our_strengths_img_text_2' WHERE id = $our_strengths_info_id;";

        $our_strengths_info_result = mysqli_query($conn, $update_our_strengths_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_our_strengths_info#edit-info-2');
            die();
            } else {
                header('location: ../edit_our_strengths_info#edit-info-2');
                die();
        }
    }

// OUR STRENGTH IMG 3
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"])) && isset($_POST["submit_update_our_strengths_img_3"])) {
    //8056377249 voice mail
    $_SESSION["empty_image_3"] = 'image NOT changed... click edit and choose an image.';
    header('location: ../edit_our_strengths_info#edit-img-3');
       
} elseif (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_SESSION["user_id"])) && (!empty($_FILES["image"]["name"])) && isset($_POST["submit_update_our_strengths_img_3"])) {
    
    unset ($_SESSION['empty_image_3']);

    

    $our_strengths_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $fileName = $_FILES["image"]["name"];
    $our_strengths_img_desc_3 = filter_var($_POST['our_strengths_img_desc_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif", "webp");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_our_strengths_info_query = "UPDATE our_strengths SET our_strengths_img_3 = '$fileName',  our_strengths_img_desc_3 = '$our_strengths_img_desc_3' WHERE id = $our_strengths_info_id;";

        $our_strengths_info_result = mysqli_query($conn, $update_our_strengths_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_our_strengths_info#edit-img-3');
            die();
            } 
        }
    }
}

// OUR STRENGTHS TITLE & TEXT 3
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_SESSION["user_id"])) && (isset($_POST['submit_update_our_strengths_info_3']))) {

    // $fileName = $_FILES["image"]["name"];
    $our_strengths_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

    $our_strengths_img_title_3 = filter_var($_POST['our_strengths_img_title_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $our_strengths_img_text_3 = filter_var($_POST['our_strengths_img_text_3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

        $update_our_strengths_info_query = "UPDATE our_strengths SET our_strengths_img_title_3 = '$our_strengths_img_title_3',  our_strengths_img_text_3 = '$our_strengths_img_text_3' WHERE id = $our_strengths_info_id;";

        $our_strengths_info_result = mysqli_query($conn, $update_our_strengths_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_our_strengths_info#edit-info-3');
            die();
            } else {
                header('location: ../edit_our_strengths_info#edit-info-3');
                die();
        }
    }

// OUR STRENGTHS IMG 4
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"])) && isset($_POST["submit_update_our_strengths_img_4"])) {
    //8056477249 voice mail
    $_SESSION["empty_image_4"] = 'image NOT changed... click edit and choose an image.';
    header('location: ../edit_our_strengths_info#edit-img-4');
       
} elseif (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_SESSION["user_id"])) && (!empty($_FILES["image"]["name"])) && isset($_POST["submit_update_our_strengths_img_4"])) {
    
    unset ($_SESSION['empty_image_4']);

    $our_strengths_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $fileName = $_FILES["image"]["name"];
    $our_strengths_img_desc_4 = filter_var($_POST['our_strengths_img_desc_4'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif", "webp");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_our_strengths_info_query = "UPDATE our_strengths SET our_strengths_img_4 = '$fileName',  our_strengths_img_desc_4 = '$our_strengths_img_desc_4' WHERE id = $our_strengths_info_id;";

        $our_strengths_info_result = mysqli_query($conn, $update_our_strengths_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_our_strengths_info#edit-img-4');
            die();
            } 
        }
    }
}

// OUR STRENGTHS TITLE & TEXT 4
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_SESSION["user_id"])) && (isset($_POST['submit_update_our_strengths_info_4']))) {

    // $fileName = $_FILES["image"]["name"];
    $our_strengths_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

    $our_strengths_img_title_4 = filter_var($_POST['our_strengths_img_title_4'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $our_strengths_img_text_4 = filter_var($_POST['our_strengths_img_text_4'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

        $update_our_strengths_info_query = "UPDATE our_strengths SET our_strengths_img_title_4 = '$our_strengths_img_title_4',  our_strengths_img_text_4 = '$our_strengths_img_text_4' WHERE id = $our_strengths_info_id;";

        $our_strengths_info_result = mysqli_query($conn, $update_our_strengths_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_our_strengths_info#edit-info-4');
            die();
            } else {
                header('location: ../edit_our_strengths_info#edit-info-4');
                die();
        }
    }

// OUR STRENGTH SMALL TOP TITLE
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_SESSION["user_id"])) && (isset($_POST['submit_update_our_strengths_titles_info']))) {

    // $fileName = $_FILES["image"]["name"];
    $our_strengths_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

    $our_strengths_small_top_title = filter_var($_POST['our_strengths_small_top_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $our_strengths_main_title = filter_var($_POST['our_strengths_main_title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

        $update_our_strengths_info_query = "UPDATE our_strengths SET our_strengths_small_top_title = '$our_strengths_small_top_title',  our_strengths_main_title = '$our_strengths_main_title' WHERE id = $our_strengths_info_id;";

        $our_strengths_info_result = mysqli_query($conn, $update_our_strengths_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_our_strengths_info');
            die();
            } else {
                header('location: ../edit_our_strengths_info');
                die();
            }
        // }
    }
// }


// OUR STRENGTHS RIGHT IMG
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"])) && isset($_POST["submit_update_our_strengths_right_img"])) {
    //8056477249 voice mail
    $_SESSION["empty_right_image"] = 'image NOT changed... click edit and choose an image.';
    header('location: ../edit_our_strengths_info#edit-right-img');
       
} elseif (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_SESSION["user_id"])) && (!empty($_FILES["image"]["name"])) && isset($_POST["submit_update_our_strengths_right_img"])) {
    
    unset ($_SESSION['empty_right_image']);

    $our_strengths_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $fileName = $_FILES["image"]["name"];
    $our_strengths_right_img_desc = filter_var($_POST['our_strengths_right_img_desc'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif", "webp");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_our_strengths_info_query = "UPDATE our_strengths SET our_strengths_right_img = '$fileName',  our_strengths_right_img_desc = '$our_strengths_right_img_desc' WHERE id = $our_strengths_info_id;";

        $our_strengths_info_result = mysqli_query($conn, $update_our_strengths_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_our_strengths_info#edit-right-img');
            die();
            } 
        }
    }
}

// OUR STRENGTHS LEFT IMG
if (($_SERVER["REQUEST_METHOD"] != "POST") || (!isset($_SESSION["user_id"])) || (empty($_FILES["image"]["name"])) && isset($_POST["submit_update_our_strengths_left_img"])) {
    //8056477249 voice mail
    $_SESSION["empty_left_image"] = 'image NOT changed... click edit and choose an image.';
    header('location: ../edit_our_strengths_info#edit-left-img');
       
} elseif (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_SESSION["user_id"])) && (!empty($_FILES["image"]["name"])) && isset($_POST["submit_update_our_strengths_left_img"])) {
    
    unset ($_SESSION['empty_left_image']);

    $our_strengths_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $fileName = $_FILES["image"]["name"];
    $our_strengths_left_img_desc = filter_var($_POST['our_strengths_left_img_desc'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif", "webp");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
    

        $update_our_strengths_info_query = "UPDATE our_strengths SET our_strengths_left_img = '$fileName',  our_strengths_left_img_desc = '$our_strengths_left_img_desc' WHERE id = $our_strengths_info_id;";

        $our_strengths_info_result = mysqli_query($conn, $update_our_strengths_info_query);

        if(!mysqli_errno($conn)) {
            header('location: ../edit_our_strengths_info#edit-left-img');
            die();
            } 
        }
    }
}

