<?php
session_start();
require 'db.php';

if (($_SERVER["REQUEST_METHOD"] != "GET") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location:../index');
} elseif($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
  $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
  $promo_info_3_query = "SELECT * FROM promotions WHERE id = $id";
  $promo_info_3_result = mysqli_query($conn, $promo_info_3_query);
  $promo_info_3 = mysqli_fetch_assoc($promo_info_3_result);
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
        <title>Update promo</title>
    </head>

    <body>
        <section style='padding: 20px; width:100vw; display:flex; justify-content: center; align-content:center'>
            <div style='width: 100%; max-width: 525px;'>
                <a style='font-size:18px' href="../edit_promo_info#promo-img-3"> Back</a>
                <!-- <h2 style='font-size:22px; padding: 30px;'>Edit</h2> -->
                 <br>
                 <br>
                <form style=" display:flex; flex-direction:column; gap 1rem; width:100%"
                    action="update_promo_info_logic.php" enctype="multipart/form-data" method="POST">

                    <input type="hidden" name="id" value="<?php $id ?>" placeholder="<?= $id ?>">

                    <input style="margin-bottom:1rem" type="hidden" name="id" value="<?= $promo_info_3['id'] ?>" />

                    <div style="display: flex; flex-direction:column; font-size:22px; gap: 1rem">
                        <p>current image:</p>
                        <img src="../assets/images/<?= $promo_info_3['promo_img_3']; ?>" alt="">
                    </div>

                    <br>
                    <br>
                    <br>
                    <div style="display: flex; flex-direction:column; font-size:22px; gap: 1rem">

                        <label for="promo_img">choose a new image:</label>

                        <input style=" font-size: 22px; padding:10px" type="file" name="image" id="promo_img"
                            value="<?= $promo_info_3['promo_img_3'] ?>" />

                        <label for="promo_img_desc_3">promo image description 3</label>

                        <input style="padding:10px; font-size: 22px" type="text" name="promo_img_desc_3" id="promo_img_desc_3" value="<?= $promo_info_3['promo_img_desc_3'] ?>" />

                        <button style=" font-size: 22px" type="submit" name="submit_update_promo_img_3">Update</button>
                    </div>
                </form>
            </div>
        </section>
    </body>

    </html>