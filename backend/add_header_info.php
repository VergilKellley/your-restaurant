<?php 
require 'db.php';
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    exit("POST request method required");
} elseif ($_POST['business_hours_mon'] == "") {
    header("Location: ../index.php");  
}elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_header_info'])) {
    $header_business_title = $_POST["header_business_title"];
    $business_name_font = $_POST["business_name_font"];
    $street_address = $_POST["street_address"];
    $business_hours_mon = $_POST["business_hours_mon"];
    $business_hours_tue = $_POST["business_hours_tue"];
    $business_hours_wed = $_POST["business_hours_wed"];
    $business_hours_thur = $_POST["business_hours_thur"];
    $business_hours_fri = $_POST["business_hours_fri"];
    $business_hours_sat = $_POST["business_hours_sat"];
    $business_hours_sun = $_POST["business_hours_sun"];
    $fileName = $_FILES["image"]["name"];

    
    // use below if text has quotes
    // $news_article_text = htmlspecialchars($_POST["news_article_text"]
    // , ENT_QUOTES);

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowedTypes = array("jpeg", "jpg", "png", "gif", "webp");
    $tempName = $_FILES["image"]["tmp_name"];
    $targetPath = "../assets/images/".$fileName;
    if(in_array($ext, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetPath)) {
            $sql = "INSERT INTO header_info (header_business_title, header_logo_favicon, business_name_font, street_address, business_hours_mon, business_hours_tue, business_hours_wed, business_hours_thur, business_hours_fri, business_hours_sat, business_hours_sun, phone, email) VALUES ('$header_business_title', '$fileName', '$business_name_font', '$street_address', '$business_hours_mon', '$business_hours_tue', '$business_hours_wed', '$business_hours_thur', '$business_hours_fri', '$business_hours_sat', '$business_hours_sun', '$phone', '$email')";
            if(mysqli_query($conn, $sql)){
                // echo "Your image has been uploaded";
                header("Location: ../edit_header_info.php");
            } else {
                echo "Image was not uploaded";
            }
        }
    }
} 