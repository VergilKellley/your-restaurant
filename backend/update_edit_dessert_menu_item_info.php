<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] != "GET") {
    exit("GET request method required");
} elseif($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
  $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
  $menu_item_query = "SELECT * FROM menu_item WHERE id = $id";
  $menu_item_result = mysqli_query($conn, $menu_item_query);
  $menu_item = mysqli_fetch_assoc($menu_item_result);
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
        <title>Update abouttions</title>
    </head>

    <body>
 
        <section style='padding: 20px; width:100vw; display:flex; justify-content: center; align-content:center'>
            <div style='width: 100%; max-width: 525px;'>
                <a style='font-size:18px' href="../edit_menu_item_info#item-num-name-desc"> Back</a>
                <h2 style='font-size:22px; padding: 30px;'>Edit</h2>
                
                <form style=" display:flex; flex-direction:column; gap 1rem; width:100%"
                    action="update_menu_item_info_logic.php" enctype="multipart/form-data" method="POST">

                    <input type="hidden" name="id" value="<?php $id ?>" placeholder="<?= $id ?>">

                    <input style="margin-bottom:1rem" type="hidden" name="id" value="<?= $menu_item['id'] ?>" />

                    <div style="display: flex; flex-direction:column; font-size:22px; gap: 1rem">


                        <label for="dessert_menu_item_num">item number</label>
                        <input style="padding:10px; font-size: 22px" type="text" name="dessert_menu_item_num"
                            id="dessert_menu_item_num" value="<?= $menu_item['dessert_menu_item_num'] ?>" />

                        <label for="dessert_menu_item_name">item name:</label>
                        <input style="padding:10px; font-size: 22px" type="text" name="dessert_menu_item_name"
                            id="dessert_menu_item_name" value="<?= $menu_item['dessert_menu_item_name'] ?>" />

                        <label for="dessert_menu_item_desc">new or seasonal item:</label>
                        <input style="padding:10px; font-size: 22px" type="text" name="dessert_menu_item_desc"
                            id="dessert_menu_item_desc" value="<?= $menu_item['dessert_menu_item_desc'] ?>" />

                        <label for="dessert_menu_item_price">item price:</label>
                        <input style="padding:10px; font-size: 22px" type="text" name="dessert_menu_item_price"
                            id="dessert_menu_item_price" value="<?= $menu_item['dessert_menu_item_price'] ?>" />

                        <label for="dessert_menu_item_text">item description:</label>
                        <input style="padding:10px; font-size: 22px" type="text" name="dessert_menu_item_text"
                            id="dessert_menu_item_text" value="<?= $menu_item['dessert_menu_item_text'] ?>" />

                        <button style=" font-size: 22px" type="submit" name="submit_update_menu_item_info">Update
                            </button>
                    </div>
                </form>
            </div>
        </section>
    </body>

    </html>