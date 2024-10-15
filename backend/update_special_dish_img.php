<?php
session_start();
require 'db.php';

if ((!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location: update_special_dish_info.php');
} elseif(isset($_GET['id'])) {
  $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
  $special_dish_img_query = "SELECT * FROM special_dish WHERE id = $id";
  $special_dish_img_result = mysqli_query($conn, $special_dish_img_query);
  $special_dish_img = mysqli_fetch_assoc($special_dish_img_result);
} else {
  header('location: update_special_dish_img.php');
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
        <title>Update Special Dish</title>
    </head>

    <body>
        <section style='padding: 20px; width:100vw; display:flex; justify-content: center; align-content:center'>
            <div style='width: 100%; max-width: 525px;'>
                <a style='font-size:18px' href="../edit_special_dish_info.php"> Back</a>
                <h2 style='font-size:22px; padding: 30px;'>Edit</h2>
                
                <form style=" display:flex; flex-direction:column; gap 1rem; width:100%"
                    action="update_special_dish_info_logic.php" enctype="multipart/form-data" method="POST">

                    <input type="hidden" name="id" value="<?php $id ?>" placeholder="<?= $id ?>">

                    <input style="margin-bottom:1rem" type="hidden" name="id" value="<?= $special_dish_img['id'] ?>" />

                    <div style="display: flex; flex-direction:column; font-size:22px; gap: 1rem">

                        <label for="special_dish_img">image</label>

                        <input style=" font-size: 22px; padding:10px" type="file" name="image" id="special_dish_img"
                            value="<?= $special_dish_img['special_dish_img'] ?>" />

                        <label for="special_dish_img_desc">image:</label>

                        <input style="padding:10px; font-size: 22px" type="text" name="special_dish_img_desc" id="special_dish_img_desc" value="<?= $special_dish_img['special_dish_img_desc'] ?>" />

                        <button style=" font-size: 22px" type="submit" name="submit_update_special_dish_img">Update</button>
                    </div>
                </form>
            </div>
        </section>
    </body>

    </html>