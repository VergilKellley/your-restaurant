<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] != "GET") {
    exit("GET request method required");
} elseif($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
  $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
  $hero_info_3_query = "SELECT * FROM hero_info_3 WHERE id = $id";
  $hero_info_3_result = mysqli_query($conn, $hero_info_3_query);
  $hero_info_3 = mysqli_fetch_assoc($hero_info_3_result);
} else {
  header('location: ../index.php');
  die();
}
?>

<!DOCTYPE php>
<php lang="en">

    <head>
        <!-- https://www.youtube.com/watch?v=izWc4pL_esc&list=PLFzi7Iy-LHGOTKhjjihNpnELb4go8q7JK&index=2 -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/media-query.css" />
        <!-- fontawesome  -->
        <script src="https://kit.fontawesome.com/7a6c6b42a6.js" crossorigin="anonymous"></script>
        <title>Update hero</title>
    </head>

    <body>

        <section style='padding: 20px; width:100vw; display:flex; justify-content: center; align-content:center'>
            <div style='width: 100%; max-width: 525px;'>
                <a style='font-size:18px' href="../edit_hero_info.php"> Back</a>
                <h2 style='font-size:22px; padding: 30px;'>Edit "<?= $hero_info_3['hero_large_text_3'] ?>"</h2>
                
                <form style=" display:flex; flex-direction:column; gap 1rem; width:100%"
                    action="update_hero_info_logic.php" enctype="multipart/form-data" method="POST">

                    <input type="hidden" name="id" value="<?php $id ?>" placeholder="<?= $id ?>">

                    <input style="margin-bottom:1rem" type="hidden" name="id" value="<?= $hero_info_3['id'] ?>" />

                    <div style="display: flex; flex-direction:column; font-size:22px; gap: 1rem">

                        <label for="hero_img">hero image 3</label>
                        <input style=" font-size: 22px; padding:10px" type="file" name="image" id="hero_img"
                            value="<?= $hero_info_3['hero_img_3'] ?>" />

                        <label for="hero_img_desc_3">hero image description 3</label>
                        <input style="padding:10px; font-size: 22px" type="text" name="hero_img_desc_3" id="hero_img_desc_3" value="<?= $hero_info_3['hero_img_desc_3'] ?>" />

                        <label for="hero_top_text">small top text 3</label>
                        <input style="padding:10px; font-size: 22px" type="text" name="hero_top_text_3"
                            id="hero_top_text" value="<?= $hero_info_3['hero_top_text_3']; ?>" />

                        <label for="hero_large_text">large text 3</label>
                        <input style="padding:10px; font-size: 22px" type="text" name="hero_large_text_3"
                            id="hero_large_text_3" value="<?= $hero_info_3['hero_large_text_3']; ?>" />

                        <label for="hero_bottom_text_3">small bottom text 3</label>
                        <input style="padding:10px; font-size: 22px" type="text" name="hero_bottom_text_3"
                            id="hero_bottom_text_3" value="<?= $hero_info_3['hero_bottom_text_3']; ?>" />

                        <label for="hero_top_btn_text_3">top button text 3</label>
                        <input style="padding:10px; font-size: 22px" type="text" name="hero_top_btn_text_3"
                            id="hero_top_btn_text_3" value="<?= $hero_info_3['hero_top_btn_text_3']; ?>" />

                        <label for="hero_top_btn_link_3">top button link 3</label>
                        <input style="padding:10px; font-size: 22px" type="text" name="hero_top_btn_link_3"
                            id="hero_top_btn_link_3" value="<?= $hero_info_3['hero_top_btn_link_3']; ?>" />

                        <label for="hero_bottom_btn_text_3">bottom button text 3</label>
                        <input style="padding:10px; font-size: 22px" type="text" name="hero_bottom_btn_text_3"
                            id="hero_bottom_btn_text_3" value="<?= $hero_info_3['hero_bottom_btn_text_3']; ?>" />

                            <label for="hero_bottom_btn_link_3">bottom button link 3</label>
                        <input style="padding:10px; font-size: 22px" type="text" name="hero_bottom_btn_link_3"
                            id="hero_bottom_btn_link_3" value="<?= $hero_info_3['hero_bottom_btn_link_3']; ?>" />

                        <button style=" font-size: 22px" type="submit" name="submit_update_hero_info_3">Update
                            "<?= $hero_info_3['hero_large_text_3'] ?>"</button>
                    </div>
                </form>
            </div>
        </section>
    </body>

    </html>