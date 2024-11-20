<?php
session_start();
require "backend/db.php";
// if (!isset($_SESSION["useruid"])) {

//     header("Location: index.php");
// }
require "backend/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing:border-box;
        }
        input {
            padding: 12px 18px;
            font-size: 16px;
        }
        textarea {
            padding: 20px;
        }
        a {
            text-decoration: none;
            line-height: normal !important;
            text-align: center
        }
        .nth-child-bkgd-color:nth-child(even) {
            background-color: #ededed;
        }

        .btn {
            width: 100px;
            padding: 12px 16px;
            border-radius: 5px;
        }

        .btn-blk {
            background-color: #333;
            color: #fff;
        }

        .btn-blk:hover {
            background-color: #fff;
            color: #333;
        }
        .btn-edit {
            background-color: green;
            color: #fff;
        }

        .btn-edit:hover {
            background-color: #fff;
            color: green;
            border: 1px solid green
        }
        .btn-delete {
            background-color: red;
            color: #fff;
        }

        .btn-delete:hover {
            background-color: #fff;
            color: red;
            border: 1px solid red;
        }

        @media (max-width:550px) {
            #form-container {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <section class="stylist_info_container" style="height: 100vh; display:grid; place-items:center;">
        <h3 style='padding-top: 40px'><a href="index">
                Back</a>
        </h3>
        <div id="add-menu-item">
                    <h2>add dessert</h2>
                </div>
                <?php
                        if(isset($_SESSION['empty_image'])) {
                            echo "<div style='border:1px solid red; padding:10px'>
                                    <p style='color:red;font-weight:bold; font-size:2rem';>" . $_SESSION['empty_image'] . "</p>";
                            unset ($_SESSION['empty_image']);
                        }
                    ?>
        <div id='form-container' style="display: flex; gap:4rem; padding: 20px">
            <form action="backend/add_new_dessert_menu_item_logic.php" class="stylist_form" method="POST" enctype="multipart/form-data">
                <br>
                <div style="display: flex; flex-direction:column; gap:1rem">
                    <label for="dessert_menu_item_num">item number:</label>
                    <input type="text" name="dessert_menu_item_num" id="dessert_menu_item_num" placeholder="enter item number">

                    <label for="dessert_menu_item_name">item name:</label>
                    <input type="text" name="dessert_menu_item_name" id="dessert_menu_item_name" placeholder="Grilled Salmon">

                    <label for="dessert_menu_item_img">choose image</label>
                    <input style=" font-size: 22px; padding:10px" type="file" name="image" id="dessert_menu_item_img" />

                    <label for="dessert_menu_item_img_desc">image description:</label>
                    <input type="text" name="dessert_menu_item_img_desc" id="dessert_menu_item_img_desc" placeholder="describe image">             

                    <label for="dessert_menu_item_desc">new or seasonal item:</label>
                    <input type="text" name="dessert_menu_item_desc" id="dessert_menu_item_desc" placeholder="Seasonal">

                    <label for="dessert_menu_item_price">item price"</label>
                    <input type="text" name="dessert_menu_item_price" placeholder="19.99">

                    <label for="dessert_menu_item_text">item description:</label>
                    <input type="text" name="dessert_menu_item_text" placeholder="Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices">

                    <button name="submit_add_new_dessert_menu_item" class="btn btn-blk">SAVE</button>
                </div>
            </form>
            
           
        </div>
    </section>
</body>

</html>