<?php
session_start();
require 'db.php';

if (($_SERVER["REQUEST_METHOD"] != "GET") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location:../index');
} elseif($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
  $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
  $our_strengths_right_img_query = "SELECT * FROM our_strengths WHERE id = $id";
  $our_strengths_right_img_result = mysqli_query($conn, $our_strengths_right_img_query);
  $our_strengths_right_img = mysqli_fetch_assoc($our_strengths_right_img_result);
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
        <title>Update our strengths</title>
    </head>

    <body>
        <section style='padding: 20px; width:100vw; display:flex; justify-content: center; align-content:center'>
            <div style='width: 100%; max-width: 525px;'>
                <a style='font-size:18px' href="../edit_our_strengths_info#edit-right-img"> Back</a>
                <br>
                <br>
                <!-- <h2 style='font-size:22px; padding: 30px;'>Edit</h2> -->
                
                <form style=" display:flex; flex-direction:column; gap 1rem; width:100%"
                    action="update_our_strengths_info_logic.php" enctype="multipart/form-data" method="POST">

                    <input type="hidden" name="id" value="<?php $id ?>" placeholder="<?= $id ?>">

                    <input style="margin-bottom:1rem" type="hidden" name="id" value="<?= $our_strengths_right_img['id'] ?>" />

                    <div style="display: flex; flex-direction:column; font-size:22px; gap: 1rem">
                        <p>current image:</p>
                        <img style="width:100px" src="../assets/images/<?= $our_strengths_right_img['our_strengths_right_img']; ?>" alt="">
                    </div>
                    <br><br>
                    <div style="display: flex; flex-direction:column; font-size:22px; gap: 1rem">

                        <label for="our_strengths_right_img">choose a new image</label>

                        <input style=" font-size: 22px; padding:10px" type="file" name="image" id="our_strengths_right_img"
                            value="<?= $our_strengths_right_img['our_strengths_right_img'] ?>" />

                        <label for="our_strengths_right_img_desc"> image description</label>

                        <input style="padding:10px; font-size: 22px" type="text" name="our_strengths_right_img_desc" id="our_strengths_right_img_desc" value="<?= $our_strengths_right_img['our_strengths_right_img_desc'] ?>" />

                        <button style=" font-size: 22px" type="submit" name="submit_update_our_strengths_right_img">Update</button>
                    </div>
                </form>
            </div>
        </section>
    </body>

    </html>