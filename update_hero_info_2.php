if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_update_hero_info_2'])) {

$fileName = $_FILES["image"]["name"];
$hero_info_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
$hero_img_desc_2 = filter_var($_POST['hero_img_desc_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$hero_top_text_2 = filter_var($_POST['hero_top_text_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$hero_large_text_2 = filter_var($_POST['hero_large_text_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$hero_bottom_text_2 = filter_var($_POST['hero_bottom_text_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$hero_top_btn_text_2 = filter_var($_POST['hero_top_btn_text_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$hero_top_btn_link_2 = filter_var($_POST['hero_top_btn_link_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$hero_bottom_btn_text_2 = filter_var($_POST['hero_bottom_btn_text_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$hero_bottom_btn_link_2 = filter_var($_POST['hero_bottom_btn_link_2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);


// $news_article_text = htmlspecialchars($_POST["news_article_text"]
// , ENT_QUOTES);


$fileName = $_FILES["image"]["name"];

$ext = pathinfo($fileName, PATHINFO_EXTENSION);
$allowedTypes = array("jpeg", "jpg", "png", "gif");
$tempName = $_FILES["image"]["tmp_name"];
$targetPath = "../assets/images/".$fileName;
if(in_array($ext, $allowedTypes)) {
    if (move_uploaded_file($tempName, $targetPath)) {


    $update_hero_info_query = "UPDATE hero_info_2 SET hero_img_2 = '$fileName',  hero_img_desc_2 = '$hero_img_desc_2', hero_top_text_2 = '$hero_top_text_2', hero_large_text_2 = '$hero_large_text_2', hero_bottom_text_2 = '$hero_bottom_text_2', hero_top_btn_text_2 = '$hero_top_btn_text_2', hero_top_btn_link_2 = '$hero_top_btn_link_2', hero_bottom_btn_text_2 = '$hero_bottom_btn_text_2', hero_bottom_btn_link_2 = '$hero_bottom_btn_link_2' WHERE id = $hero_info_id;";

    $hero_info_result = mysqli_query($conn, $update_hero_info_query);

    if(!mysqli_errno($conn)) {
        header('location: ../edit_hero_info.php');
        die();
        } else {
            hero('location: ../index.php');
            die();
        }
    }
}
}