<?php
session_start();
require "backend/db.php";

if (!isset($_SESSION["user_id"])) {

    header("Location: index");
}
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
        box-sizing: border-box;
    }

    input {
        padding: 10px;
        font-size: 18px;
        margin-top: 10px;
    }

    div p,
    label {
        font-weight: bold;
    }

    textarea {
        padding: 10px;
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
        border: 1px solid green;
        cursor: pointer;
    }

    .btn-delete {
        background-color: red;
        color: #fff;
    }

    .btn-delete:hover {
        background-color: #fff;
        color: red;
        border: 1px solid red;
        cursor: pointer;
    }

    @media (max-width: 670px) {
        #header-edits {
            flex-direction: column !important;
        }

        .mobile-edit-photos {
            display: block;
            width: 100vw !important;
            padding: 0 10px;
        }

        .mobile-edit-photos span img {
            width: 100% !important;
        }

        .form-container {
            width: 100% !important;
        }
    }

    @media (max-width:550px) {
        .form-container {
            flex-direction: column;
        }
    }
    </style>
</head>

<body>


    <section id='header-edits' class="stylist_info_container;"
        style="display:flex;flex-direction:column;  justify-content:center; place-items:center; margin: 5rem auto">

        <div>
            <a href="index.php">Back</a>
        </div>

        <br>

        <!-- MENU ITEM IMAGE 1 -->
        <div class='mobile-edit-photos'>
            <div>
                <h2>edit menu image & description</h2>
            </div>
        </div>

        <!-- MENU IMAGE ITEM -->

        <div id="edit-img">
        <?php
                        if(isset($_SESSION['empty_image'])) {
                            echo "<div style='border:1px solid red; padding:10px'>
                                    <p style='color:red;font-weight:bold; font-size:2rem';>" . $_SESSION['empty_image'] . "</p>
                                    </div>";
                                
                            unset ($_SESSION['empty_image']);
                        }
                        ?>
        </div>
        <?php
                    $menu_info_query = "SELECT * FROM menu_item";
                    $menu_info_result = mysqli_query($conn, $menu_info_query);
                    ?>
        <?php while ($menu_info = mysqli_fetch_assoc($menu_info_result)) : ?>
        <div class='form-container' style="border:1px solid #000; margin:3rem 0;border-radius: 5px; width:448.4px">
            <div class='nth-child-bkgd-color' style='padding:10px'>
                <div style="margin-top:10px">
                    <input type="hidden" name="id" value="<?= $menu_info['id'] ?>">
                    <?php
                                    GLOBAL $menu_id;
                                    $menu_id = $menu_info['id'];
                                ?>
                    <input type="hidden" name="id" value="<?= $menu_info['id'] ?>">

                    
                    <div style="display:flex; justify-content:space-around">
                        <div style="display:flex; flex-direction:column">
                            <label for="menu-item-num">item number:</label>
                            <p><?= $menu_info['menu_item_num'] ?></p>
                            <br>
                            <p>image description:</p>
                            <p><?= $menu_info['menu_item_img_desc'] ?></p>
                        </div>


                        
                        <div style="display:flex; flex-direction:column">
                            <p style="margin-bottom:10px">current image:</p>
                            <img style="height:100px; width:100px"
                                src="assets/images/<?= $menu_info['menu_item_img']; ?>" alt="">
                        </div>
                    </div>
                </div>
                <?php                   
                        echo "
                            <div style='display:flex; justify-content:center; align-items:center; margin:50px 0'>
                            <p><a class='btn btn-edit' href='backend/update_edit_menu_item_img.php?id=" . $menu_info['id'] . "'>Edit</a></p>
                        </div>";                       
                    ?>
            </div>
        </div>
        <?php endwhile; ?>
        </div>

        <!-- MENU ITEM IMAGE 1 -->
        <div class='mobile-edit-photos'>
            <div>
                <h2>edit menu text</h2>
            </div>
        </div>


        <!-- MENU ITEM TEXT INFO -->
        <br>
        <?php
                    $menu_info_query = "SELECT * FROM menu_item";
                    $menu_info_result = mysqli_query($conn, $menu_info_query);
                    ?>
        <?php while ($menu_info = mysqli_fetch_assoc($menu_info_result)) : ?>
        <div class='form-container' style="border:1px solid #000; margin:3rem 0;border-radius: 5px; width:450px">
            <div class='nth-child-bkgd-color' style='padding:10px'>
                <div style="margin-top:10px">
                    <input type="hidden" name="id" value="<?= $menu_info['id'] ?>">
                    <?php
                                    GLOBAL $menu_id;
                                    $menu_id = $menu_info['id'];
                                ?>
                    <input type="hidden" name="id" value="<?= $menu_info['id'] ?>">
                    <?php
                                    GLOBAL $menu_id;
                                    $menu_id = $menu_info['id'];
                                ?>

                    <div style="display:flex; flex-direction:column; gap:20px">
                        <div style="display:flex; flex-direction: column; margin-top:15px">

                            <div style="display:flex; justify-content:space-around">
                                <div style="display:flex; flex-direction:column">
                                    <p>item number:</p>
                                    <p><?= $menu_info['menu_item_num'] ?></p>
                                    <div>
                                        <br>
                                        <p>image description:</p>
                                        <p><?= $menu_info['menu_item_img_desc'] ?></p>
                                    </div>
                                </div>

                                <div style="display:flex; flex-direction:column">
                                    <p style="margin-bottom:10px">current image:</p>
                                    <img style="height:100px; width:100px"
                                        src="assets/images/<?= $menu_info['menu_item_img']; ?>" alt="">
                                </div>
                            </div>
                            <br>
                        </div>

                        <div style="display:flex; justify-content:space-around">
                            <div style="display:flex; flex-direction: column; margin-top:15px">
                                <p>item name:</p>
                                <p><?= $menu_info['menu_item_name'] ?></p>
                            </div>
                            <div style="display:flex; flex-direction:column;margin-top:15px">
                                <p>new or seasonal item:</p>
                                <p><?= $menu_info['menu_item_desc'] ?></p>
                            </div>
                        </div>
                        <div style="display:flex; justify-content:space-around">
                            <div style="display:flex; flex-direction: column; margin-top:15px">
                                <p>item price:</p>
                                <p><?= $menu_info['menu_item_price'] ?></p>
                            </div>
                            <div style="display:flex; flex-direction:column;margin-top:15px; width:35%">
                                <p>item description:</p>
                                <p><?= $menu_info['menu_item_text'] ?></p>
                            </div>
                        </div>



                    </div>
                    <div style="display:flex; flex-direction:column; margin-top:40px">
                        <?php                   
                                echo "
                                    <div style='display:flex; justify-content:center; align-items:center; margin-bottom:20px'>
                                    <p><a class='btn btn-edit' href='backend/update_edit_menu_item_info.php?id=" . $menu_info['id'] . "'>Edit</a></p>
                                </div>";                       
                            ?>
                        <!-- <button type="submit" class="btn btn-edit" style="margin-top:10px;">SAVE</button> -->
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </section>
    <script src="js/closeModals.js" defer></script>
</body>

</html>