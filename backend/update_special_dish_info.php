<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] != "GET") {
    exit("GET request method required");
} elseif($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
  $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
  $special_dish_info_query = "SELECT * FROM special_dish WHERE id = $id";
  $special_dish_info_result = mysqli_query($conn, $special_dish_info_query);
  $special_dish_info = mysqli_fetch_assoc($special_dish_info_result);
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
        <title>Update special dish</title>
    </head>

    <body>
 
        <section style='padding: 20px; width:100vw; display:flex; justify-content: center; align-content:center'>
            <div style='width: 100%; max-width: 525px;'>
                <a style='font-size:18px' href="../edit_special_dish_info.php"> Back</a>
                <h2 style='font-size:22px; padding: 30px;'>Edit</h2>
                
                <form style=" display:flex; flex-direction:column; gap 1rem; width:100%"
                    action="update_special_dish_info_logic.php" enctype="multipart/form-data" method="POST">

                    <input type="hidden" name="id" value="<?php $id ?>" placeholder="<?= $id ?>">

                    <input style="margin-bottom:1rem" type="hidden" name="id" value="<?= $special_dish_info['id'] ?>" />

                    <div style="display: flex; flex-direction:column; font-size:22px; gap: 1rem">


                        <label for="special_dish_small_title">small title </label>
                        <input style="padding:10px; font-size: 22px" type="text" name="special_dish_small_title"
                            id="special_dish_small_title" value="<?= $special_dish_info['special_dish_small_title']; ?>" />

                        <label for="special_dish_main_title">main title </label>
                        <input style="padding:10px; font-size: 22px" type="text" name="special_dish_main_title"
                            id="special_dish_small_title" value="<?= $special_dish_info['special_dish_main_title']; ?>" />

                        <label for="special_dish_text">text </label>
                        <input style="padding:10px; font-size: 22px" type="text" name="special_dish_text"
                            id="special_dish_text" value="<?= $special_dish_info['special_dish_text']; ?>" />

                        <label for="special_dish_old_price">old price </label>
                        <input style="padding:10px; font-size: 22px" type="text" name="special_dish_old_price"
                            id="special_dish_old_price" value="<?= $special_dish_info['special_dish_old_price']; ?>" />

                        <label for="special_dish_sale_price">sale price </label>
                        <input style="padding:10px; font-size: 22px" type="text" name="special_dish_sale_price"
                            id="special_dish_sale_price" value="<?= $special_dish_info['special_dish_sale_price']; ?>" />

                        <button style=" font-size: 22px" type="submit" name="submit_update_special_dish_info">Update
                            </button>
                    </div>
                </form>
            </div>
        </section>
    </body>

    </html>