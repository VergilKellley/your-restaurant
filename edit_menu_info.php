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
        padding: 12px 18px;
        font-size: 16px;
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

        <!-- MENU ITEM 1 -->
        <div class='mobile-edit-photos' style='max-width:500px'>
            <div>
                <h2>edit menu titles</h2>
            </div>
            <br>
            <div
                style=" display: flex; flex-direction:column; align-items:center; gap:1rem; overflow-y:scroll; border:1px solid #333; padding: 10px">

                <?php
                    $menu_info_query = "SELECT * FROM menu";
                    $menu_info_result = mysqli_query($conn, $menu_info_query);
                    ?>
                <?php while ($menu_info = mysqli_fetch_assoc($menu_info_result)) : ?>
                <div class='nth-child-bkgd-color'
                    style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                    <input type="hidden" name="id" value="<?= $menu_info['id'] ?>">
                    <?php
                            GLOBAL $menu_id;
                            $menu_id = $menu_info['id'];
                            ?>

                    <br>

                    <p>small top title:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$menu_info['small_top_title']; ?></span>
                    </p>
                    <br>
                    <p>main title:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$menu_info['main_title']; ?></span>
                    </p>
                    <br>
                    <p>sub title:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$menu_info['sub_title']; ?></span>
                    </p>
                    <br>
                    <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; margin-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_menu_titles_info.php?id=" . $menu_info['id'] . "'>Edit</a></p>

                        
                                    </div>
                        </div>";                       
                        ?>
                    <?php endwhile ?>
                </div>
            </div>
        </div>

        <!-- MENU ITEM 1 -->
        <div class='form-container' style="display: flex; gap:4rem;">
            <div style="padding:10px; max-width:500px; min-width:300px">
                <br>
                <div id="menu-img-1">
                    <h2>edit menu image 1</h2>
                    <?php
                        if(isset($_SESSION['empty_image_1'])) {
                            echo "<div style='border:1px solid red; padding:10px'>
                                    <p style='color:red;font-weight:bold; font-size:2rem';>" . $_SESSION['empty_image_1'] . "</p>";
                            unset ($_SESSION['empty_image_1']);
                        }
                    ?>
                </div>
                <br>
                <div
                    style="display:flex; flex-direction:column; gap:1rem; padding:10px;max-width:500px; min-width:300px">

                    <?php
                    $menu_info_query = "SELECT * FROM menu";
                    $menu_info_result = mysqli_query($conn, $menu_info_query);
                    ?>
                    <?php while ($menu_info = mysqli_fetch_assoc($menu_info_result)) : ?>
                    <div class='nth-child-bkgd-color'
                        style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                        <input type="hidden" name="id" value="<?= $menu_info['id'] ?>">
                        <?php
                            GLOBAL $menu_id;
                            $menu_id = $menu_info['id'];
                            ?>

                        <p style="max-width:100vw">
                            <span
                                style="display:flex; flex-direction:column; align-items:center; font-weight:bold">
                                image 1:
                                <img style='width:100%' src='assets/images/<?= $menu_info['menu_img_1'] ?>'
                                    alt="<?= $menu_info['menu_img_desc_1'] ?>">
                            </span>
                        </p>
                        <label for="menu_item_num">menu item number</label>
                        <input type="text" id="menu_item_num" name="menu_item_num" value="menu_item_num">
                        <br>
                        <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; padding-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_menu_img_1.php?id=" . $menu_info['id'] . "'>Edit</a></p>
                        <br>
                        </div>
                    </div>
                    <br>";                       
                        ?>
                        <!-- <button name="add_menu_info" class="btn btn-blk">Edit</button> -->
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <br>

            <div class='mobile-edit-photos' style='max-width:500px'>
            <div>
                <h2>edit menu info 1</h2>
            </div>
            <br>
            <div
                style=" display: flex; flex-direction:column; align-items:center; gap:1rem; overflow-y:scroll; border:1px solid #333; padding: 10px">

                <?php
                    $menu_info_query = "SELECT * FROM menu";
                    $menu_info_result = mysqli_query($conn, $menu_info_query);
                    ?>
                <?php while ($menu_info = mysqli_fetch_assoc($menu_info_result)) : ?>
                <div class='nth-child-bkgd-color'
                    style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                    <input type="hidden" name="id" value="<?= $menu_info['id'] ?>">
                    <?php
                            GLOBAL $menu_id;
                            $menu_id = $menu_info['id'];
                            ?>

                    <br>

                    <label for="menu_item_num">menu item number</label>
                    <input type="text" name="menu_item_num" value="<?= $menu_item_num; ?>">
                    <br>
                    <p>menu img food title:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$menu_info['menu_img_title_1']; ?></span>
                    </p>
                    <label for="menu_food_img"></label>
                    <br>
                    <p>food title description:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$menu_info['menu_img_food_title_desc_1']; ?></span>
                    </p>
                    <br>
                    <p>food item price:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$menu_info['menu_food_item_price_1']; ?></span>
                    </p>
                    <br>
                    <p>menu img text:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$menu_info['menu_img_text_1']; ?></span>
                    </p>
                    <br>
                    <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; margin-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_menu_info_1.php?id=" . $menu_info['id'] . "'>Edit</a></p>

                        
                                    </div>
                        </div>";                       
                        ?>
                    <?php endwhile ?>

                    <!-- <form action='backend/delete_menu_info.php' method='POST'>
                                        <button class='btn btn-delete' style='margin-left:20px' id='btn-delete' type='submit' name='delete_menu_info' value='" . $menu_info['id'] . "'> Delete</button>
                                    </form> -->
                </div>
            </div>
        </div>

        <!-- MENU ITEM 2 -->
        <div class='form-container' style="display: flex; gap:4rem;">
            <div style="padding:10px; max-width:500px; min-width:300px">
                <br>
                <div id="menu-img-1">
                    <h2>edit menu image 2</h2>
                    <?php
                        if(isset($_SESSION['empty_image_2'])) {
                            echo "<div style='border:1px solid red; padding:10px'>
                                    <p style='color:red;font-weight:bold; font-size:2rem';>" . $_SESSION['empty_image_2'] . "</p>";
                            unset ($_SESSION['empty_image_2']);
                        }
                    ?>
                </div>
                <br>
                <div
                    style="display:flex; flex-direction:column; gap:1rem; padding:10px;max-width:500px; min-width:300px">

                    <?php
                    $menu_info_query = "SELECT * FROM menu";
                    $menu_info_result = mysqli_query($conn, $menu_info_query);
                    ?>
                    <?php while ($menu_info = mysqli_fetch_assoc($menu_info_result)) : ?>
                    <div class='nth-child-bkgd-color'
                        style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                        <input type="hidden" name="id" value="<?= $menu_info['id'] ?>">
                        <?php
                            GLOBAL $menu_id;
                            $menu_id = $menu_info['id'];
                            ?>

                        <p style="max-width:100vw">
                            <span
                                style="display:flex; flex-direction:column; align-items:center; font-weight:bold">
                                image 1:
                                <img style='width:100%' src='assets/images/<?= $menu_info['menu_img_2'] ?>'
                                    alt="<?= $menu_info['menu_img_2'] ?>">
                            </span>
                        </p>
                        <br>
                        <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; padding-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_menu_img_1.php?id=" . $menu_info['id'] . "'>Edit</a></p>
                        <br>
                        </div>
                    </div>
                    <br>";                       
                        ?>
                        <!-- <button name="add_menu_info" class="btn btn-blk">Edit</button> -->
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <br>

            <div class='mobile-edit-photos' style='max-width:500px'>
            <div>
                <h2>edit menu info 2</h2>
            </div>
            <br>
            <div
                style=" display: flex; flex-direction:column; align-items:center; gap:1rem; overflow-y:scroll; border:1px solid #333; padding: 10px">

                <?php
                    $menu_info_query = "SELECT * FROM menu";
                    $menu_info_result = mysqli_query($conn, $menu_info_query);
                    ?>
                <?php while ($menu_info = mysqli_fetch_assoc($menu_info_result)) : ?>
                <div class='nth-child-bkgd-color'
                    style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                    <input type="hidden" name="id" value="<?= $menu_info['id'] ?>">
                    <?php
                            GLOBAL $menu_id;
                            $menu_id = $menu_info['id'];
                            ?>

                    <br>

                    <p>menu img food title 2:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$menu_info['menu_img_title_2']; ?></span>
                    </p>
                    <br>
                    <p>food title description 2:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$menu_info['menu_img_food_title_desc_2']; ?></span>
                    </p>
                    <br>
                    <p>menu img text 2:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$menu_info['menu_img_text_2']; ?></span>
                    </p>
                    <br>
                    <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; margin-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_menu_info_2.php?id=" . $menu_info['id'] . "'>Edit</a></p>

                        
                                    </div>
                        </div>";                       
                        ?>
                    <?php endwhile ?>

                    <!-- <form action='backend/delete_menu_info.php' method='POST'>
                                        <button class='btn btn-delete' style='margin-left:20px' id='btn-delete' type='submit' name='delete_menu_info' value='" . $menu_info['id'] . "'> Delete</button>
                                    </form> -->
                </div>
            </div>
        </div>

        <!-- MENU ITEM 3 -->
        <div class='form-container' style="display: flex; gap:4rem;">
            <div style="padding:10px; max-width:500px; min-width:300px">
                <br>
                <div id="menu-img-3">
                    <h2>edit menu image 3</h2>
                    <?php
                        if(isset($_SESSION['empty_image_3'])) {
                            echo "<div style='border:1px solid red; padding:10px'>
                                    <p style='color:red;font-weight:bold; font-size:2rem';>" . $_SESSION['empty_image_3'] . "</p>";
                            unset ($_SESSION['empty_image_3']);
                        }
                    ?>
                </div>
                <br>
                <div
                    style="display:flex; flex-direction:column; gap:1rem; padding:10px;max-width:500px; min-width:300px">

                    <?php
                    $menu_info_query = "SELECT * FROM menu";
                    $menu_info_result = mysqli_query($conn, $menu_info_query);
                    ?>
                    <?php while ($menu_info = mysqli_fetch_assoc($menu_info_result)) : ?>
                    <div class='nth-child-bkgd-color'
                        style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                        <input type="hidden" name="id" value="<?= $menu_info['id'] ?>">
                        <?php
                            GLOBAL $menu_id;
                            $menu_id = $menu_info['id'];
                            ?>

                        <p style="max-width:100vw">
                            <span
                                style="display:flex; flex-direction:column; align-items:center; font-weight:bold">
                                image 3:
                                <img style='width:100%' src='assets/images/<?= $menu_info['menu_img_3'] ?>'
                                    alt="<?= $menu_info['menu_img_3'] ?>">
                            </span>
                        </p>
                        <br>
                        <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; padding-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_menu_img_3.php?id=" . $menu_info['id'] . "'>Edit</a></p>
                        <br>
                        </div>
                    </div>
                    <br>";                       
                        ?>
                        <!-- <button name="add_menu_info" class="btn btn-blk">Edit</button> -->
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <br>

            <div class='mobile-edit-photos' style='max-width:500px'>
            <div>
                <h2>edit menu info 3</h2>
            </div>
            <br>
            <div
                style=" display: flex; flex-direction:column; align-items:center; gap:1rem; overflow-y:scroll; border:1px solid #333; padding: 10px">

                <?php
                    $menu_info_query = "SELECT * FROM menu";
                    $menu_info_result = mysqli_query($conn, $menu_info_query);
                    ?>
                <?php while ($menu_info = mysqli_fetch_assoc($menu_info_result)) : ?>
                <div class='nth-child-bkgd-color'
                    style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                    <input type="hidden" name="id" value="<?= $menu_info['id'] ?>">
                    <?php
                            GLOBAL $menu_id;
                            $menu_id = $menu_info['id'];
                            ?>

                    <br>

                    <p>menu img food title 3:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$menu_info['menu_img_title_3']; ?></span>
                    </p>
                    <br>
                    <p>food title description 3:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$menu_info['menu_img_food_title_desc_3']; ?></span>
                    </p>
                    <br>
                    <p>menu img text 3:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$menu_info['menu_img_text_3']; ?></span>
                    </p>
                    <br>
                    <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; margin-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_menu_info_3.php?id=" . $menu_info['id'] . "'>Edit</a></p>

                        
                                    </div>
                        </div>";                       
                        ?>
                    <?php endwhile ?>

                    <!-- <form action='backend/delete_menu_info.php' method='POST'>
                                        <button class='btn btn-delete' style='margin-left:20px' id='btn-delete' type='submit' name='delete_menu_info' value='" . $menu_info['id'] . "'> Delete</button>
                                    </form> -->
                </div>
            </div>
        </div>

        <!-- MENU ITEM 4 -->
        <div class='form-container' style="display: flex; gap:4rem;">
            <div style="padding:10px; max-width:500px; min-width:300px">
                <br>
                <div id="menu-img-4">
                    <h2>edit menu image 4</h2>
                    <?php
                        if(isset($_SESSION['empty_image_4'])) {
                            echo "<div style='border:1px solid red; padding:10px'>
                                    <p style='color:red;font-weight:bold; font-size:2rem';>" . $_SESSION['empty_image_1'] . "</p>";
                            unset ($_SESSION['empty_image_4']);
                        }
                    ?>
                </div>
                <br>
                <div
                    style="display:flex; flex-direction:column; gap:1rem; padding:10px;max-width:500px; min-width:300px">

                    <?php
                    $menu_info_query = "SELECT * FROM menu";
                    $menu_info_result = mysqli_query($conn, $menu_info_query);
                    ?>
                    <?php while ($menu_info = mysqli_fetch_assoc($menu_info_result)) : ?>
                    <div class='nth-child-bkgd-color'
                        style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                        <input type="hidden" name="id" value="<?= $menu_info['id'] ?>">
                        <?php
                            GLOBAL $menu_id;
                            $menu_id = $menu_info['id'];
                            ?>

                        <p style="max-width:100vw">
                            <span
                                style="display:flex; flex-direction:column; align-items:center; font-weight:bold">
                                image 1:
                                <img style='width:100%' src='assets/images/<?= $menu_info['menu_img_4'] ?>'
                                    alt="<?= $menu_info['menu_img_4'] ?>">
                            </span>
                        </p>
                        <br>
                        <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; padding-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_menu_img_4.php?id=" . $menu_info['id'] . "'>Edit</a></p>
                        <br>
                        </div>
                    </div>
                    <br>";                       
                        ?>
                        <!-- <button name="add_menu_info" class="btn btn-blk">Edit</button> -->
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <br>

            <div class='mobile-edit-photos' style='max-width:500px'>
            <div>
                <h2>edit menu info 4</h2>
            </div>
            <br>
            <div
                style=" display: flex; flex-direction:column; align-items:center; gap:1rem; overflow-y:scroll; border:1px solid #333; padding: 10px">

                <?php
                    $menu_info_query = "SELECT * FROM menu";
                    $menu_info_result = mysqli_query($conn, $menu_info_query);
                    ?>
                <?php while ($menu_info = mysqli_fetch_assoc($menu_info_result)) : ?>
                <div class='nth-child-bkgd-color'
                    style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                    <input type="hidden" name="id" value="<?= $menu_info['id'] ?>">
                    <?php
                            GLOBAL $menu_id;
                            $menu_id = $menu_info['id'];
                            ?>

                    <br>

                    <p>menu img food title 4:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$menu_info['menu_img_title_1']; ?></span>
                    </p>
                    <br>
                    <p>food title description 4:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$menu_info['menu_img_food_title_desc_1']; ?></span>
                    </p>
                    <br>
                    <p>menu img text 4:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$menu_info['menu_img_text_4']; ?></span>
                    </p>
                    <br>
                    <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; margin-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_menu_info_1.php?id=" . $menu_info['id'] . "'>Edit</a></p>

                        
                                    </div>
                        </div>";                       
                        ?>
                    <?php endwhile ?>

                    <!-- <form action='backend/delete_menu_info.php' method='POST'>
                                        <button class='btn btn-delete' style='margin-left:20px' id='btn-delete' type='submit' name='delete_menu_info' value='" . $menu_info['id'] . "'> Delete</button>
                                    </form> -->
                </div>
            </div>
        </div>

        <!-- MENU ITEM 5 -->
        <div class='form-container' style="display: flex; gap:4rem;">
            <div style="padding:10px; max-width:500px; min-width:300px">
                <br>
                <div id="menu-img-1">
                    <h2>edit menu image 5</h2>
                    <?php
                        if(isset($_SESSION['empty_image_5'])) {
                            echo "<div style='border:1px solid red; padding:10px'>
                                    <p style='color:red;font-weight:bold; font-size:2rem';>" . $_SESSION['empty_image_1'] . "</p>";
                            unset ($_SESSION['empty_image_5']);
                        }
                    ?>
                </div>
                <br>
                <div
                    style="display:flex; flex-direction:column; gap:1rem; padding:10px;max-width:500px; min-width:300px">

                    <?php
                    $menu_info_query = "SELECT * FROM menu";
                    $menu_info_result = mysqli_query($conn, $menu_info_query);
                    ?>
                    <?php while ($menu_info = mysqli_fetch_assoc($menu_info_result)) : ?>
                    <div class='nth-child-bkgd-color'
                        style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                        <input type="hidden" name="id" value="<?= $menu_info['id'] ?>">
                        <?php
                            GLOBAL $menu_id;
                            $menu_id = $menu_info['id'];
                            ?>

                        <p style="max-width:100vw">
                            <span
                                style="display:flex; flex-direction:column; align-items:center; font-weight:bold">
                                image 5:
                                <img style='width:100%' src='assets/images/<?= $menu_info['menu_img_5'] ?>'
                                    alt="<?= $menu_info['menu_img_5'] ?>">
                            </span>
                        </p>
                        <br>
                        <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; padding-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_menu_img_5.php?id=" . $menu_info['id'] . "'>Edit</a></p>
                        <br>
                        </div>
                    </div>
                    <br>";                       
                        ?>
                        <!-- <button name="add_menu_info" class="btn btn-blk">Edit</button> -->
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <br>

            <div class='mobile-edit-photos' style='max-width:500px'>
            <div>
                <h2>edit menu info 5</h2>
            </div>
            <br>
            <div
                style=" display: flex; flex-direction:column; align-items:center; gap:1rem; overflow-y:scroll; border:1px solid #333; padding: 10px">

                <?php
                    $menu_info_query = "SELECT * FROM menu";
                    $menu_info_result = mysqli_query($conn, $menu_info_query);
                    ?>
                <?php while ($menu_info = mysqli_fetch_assoc($menu_info_result)) : ?>
                <div class='nth-child-bkgd-color'
                    style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                    <input type="hidden" name="id" value="<?= $menu_info['id'] ?>">
                    <?php
                            GLOBAL $menu_id;
                            $menu_id = $menu_info['id'];
                            ?>

                    <br>

                    <p>menu img food title 5:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$menu_info['menu_img_title_5']; ?></span>
                    </p>
                    <br>
                    <p>food title description 5:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$menu_info['menu_img_food_title_desc_5']; ?></span>
                    </p>
                    <br>
                    <p>menu img text 5:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$menu_info['menu_img_text_5']; ?></span>
                    </p>
                    <br>
                    <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; margin-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_menu_info_5.php?id=" . $menu_info['id'] . "'>Edit</a></p>

                        
                                    </div>
                        </div>";                       
                        ?>
                    <?php endwhile ?>

                    <!-- <form action='backend/delete_menu_info.php' method='POST'>
                                        <button class='btn btn-delete' style='margin-left:20px' id='btn-delete' type='submit' name='delete_menu_info' value='" . $menu_info['id'] . "'> Delete</button>
                                    </form> -->
                </div>
            </div>
        </div>

        <!-- MENU ITEM 6 -->
        <div class='form-container' style="display: flex; gap:4rem;">
            <div style="padding:10px; max-width:500px; min-width:300px">
                <br>
                <div id="menu-img-1">
                    <h2>edit menu image 6</h2>
                    <?php
                        if(isset($_SESSION['empty_image_6'])) {
                            echo "<div style='border:1px solid red; padding:10px'>
                                    <p style='color:red;font-weight:bold; font-size:2rem';>" . $_SESSION['empty_image_6'] . "</p>";
                            unset ($_SESSION['empty_image_6']);
                        }
                    ?>
                </div>
                <br>
                <div
                    style="display:flex; flex-direction:column; gap:1rem; padding:10px;max-width:500px; min-width:300px">

                    <?php
                    $menu_info_query = "SELECT * FROM menu";
                    $menu_info_result = mysqli_query($conn, $menu_info_query);
                    ?>
                    <?php while ($menu_info = mysqli_fetch_assoc($menu_info_result)) : ?>
                    <div class='nth-child-bkgd-color'
                        style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                        <input type="hidden" name="id" value="<?= $menu_info['id'] ?>">
                        <?php
                            GLOBAL $menu_id;
                            $menu_id = $menu_info['id'];
                            ?>

                        <p style="max-width:100vw">
                            <span
                                style="display:flex; flex-direction:column; align-items:center; font-weight:bold">
                                image 6:
                                <img style='width:100%' src='assets/images/<?= $menu_info['menu_img_6'] ?>'
                                    alt="<?= $menu_info['menu_img_6'] ?>">
                            </span>
                        </p>
                        <br>
                        <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; padding-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_menu_img_6.php?id=" . $menu_info['id'] . "'>Edit</a></p>
                        <br>
                        </div>
                    </div>
                    <br>";                       
                        ?>
                        <!-- <button name="add_menu_info" class="btn btn-blk">Edit</button> -->
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <br>

            <div class='mobile-edit-photos' style='max-width:500px'>
            <div>
                <h2>edit menu info 6</h2>
            </div>
            <br>
            <div
                style=" display: flex; flex-direction:column; align-items:center; gap:1rem; overflow-y:scroll; border:1px solid #333; padding: 10px">

                <?php
                    $menu_info_query = "SELECT * FROM menu";
                    $menu_info_result = mysqli_query($conn, $menu_info_query);
                    ?>
                <?php while ($menu_info = mysqli_fetch_assoc($menu_info_result)) : ?>
                <div class='nth-child-bkgd-color'
                    style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                    <input type="hidden" name="id" value="<?= $menu_info['id'] ?>">
                    <?php
                            GLOBAL $menu_id;
                            $menu_id = $menu_info['id'];
                            ?>

                    <br>

                    <p>menu img food title 1:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$menu_info['menu_img_title_6']; ?></span>
                    </p>
                    <br>
                    <p>food title description 1:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$menu_info['menu_img_food_title_desc_6']; ?></span>
                    </p>
                    <br>
                    <p>menu img text 6:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$menu_info['menu_img_text_6']; ?></span>
                    </p>
                    <br>
                    <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; margin-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_menu_info_6.php?id=" . $menu_info['id'] . "'>Edit</a></p>

                        
                                    </div>
                        </div>";                       
                        ?>
                    <?php endwhile ?>

                    <!-- <form action='backend/delete_menu_info.php' method='POST'>
                                        <button class='btn btn-delete' style='margin-left:20px' id='btn-delete' type='submit' name='delete_menu_info' value='" . $menu_info['id'] . "'> Delete</button>
                                    </form> -->
                </div>
            </div>
        </div>

        </div>
        </div>
    </section>
    <script src="js/closeModals.js" defer></script>
</body>

</html>