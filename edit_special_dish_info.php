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
        style="display:flex;flex-direction:column;  justify-content:center; place-items:center; margin: 0 auto">
        <div>
            <a href="index.php">Back</a>
        </div>
        <div class='mobile-edit-photos' style='max-width:500px'>
            <div>
                <h2>edit special dish</h2>
            </div>
            <br>
            <div
                style=" display: flex; flex-direction:column; align-items:center; gap:1rem; height: 500px; overflow-y:scroll; border:1px solid #333; padding: 10px">

                <?php
                    $special_dish_info_query = "SELECT * FROM special_dish";
                    $special_dish_info_result = mysqli_query($conn, $special_dish_info_query);
                    ?>
                <?php while ($special_dish_info = mysqli_fetch_assoc($special_dish_info_result)) : ?>
                <div class='nth-child-bkgd-color'
                    style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                    <input type="hidden" name="id" value="<?= $special_dish_info['id'] ?>">
                    <?php
                            GLOBAL $special_dish_id;
                            $special_dish_id = $special_dish_info['id'];
                            ?>

                    <br>

                    <p>small title:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$special_dish_info['special_dish_small_title']; ?></span>
                    </p>
                    <br>
                    <p>main title:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$special_dish_info['special_dish_main_title']; ?></span>
                    </p>
                    <br>
                    <p>text</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$special_dish_info['special_dish_text']; ?></span>
                    </p>

                    <p>old price</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$special_dish_info['special_dish_old_price']; ?></span>
                    </p>
                    <p>sale price</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$special_dish_info['special_dish_sale_price']; ?></span>
                    </p>
                    <br>
                    <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; margin-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_special_dish_info.php?id=" . $special_dish_info['id'] . "'>Edit</a></p>

                        
                                    </div>
                        </div>";                       
                        ?>
                    <?php endwhile ?>
                </div>
            </div>
        </div>

        <div id="special-dish-img" class='form-container' style="display: flex; gap:4rem;">
            <div style="padding:10px; max-width:500px; min-width:300px">
                <br>
                <div>
                    <h2>image </h2>
                    <?php
                        if(isset($_SESSION['empty_image'])) {
                            echo "<div style='border:1px solid red; padding:10px'>
                                    <p style='color:red;font-weight:bold; font-size:2rem';>" . $_SESSION['empty_image'] . "</p>";
                            unset ($_SESSION['empty_image']);
                        }
                        ?>
                </div>
                <br>
                <div
                    style="display:flex; flex-direction:column; gap:1rem; padding:10px;max-width:500px; min-width:300px">

                    <?php
                    $special_dish_info_query = "SELECT * FROM special_dish";
                    $special_dish_info_result = mysqli_query($conn, $special_dish_info_query);
                    ?>
                    <?php while ($special_dish_info = mysqli_fetch_assoc($special_dish_info_result)) : ?>
                    <div class='nth-child-bkgd-color'
                        style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                        <input type="hidden" name="id" value="<?= $special_dish_info['id'] ?>">
                        <?php
                            GLOBAL $special_dish_id;
                            $special_dish_id = $special_dish_info['id'];
                            ?>

                        <p style="max-width:100vw">
                            <span
                                style="display:flex; flex-direction:column; align-items:center; font-weight:bold">
                                image:
                                <img style='width:100%' src='assets/images/<?= $special_dish_info['special_dish_img'] ?>'
                                    alt="<?= $special_dish_info['special_dish_img_desc'] ?>">
                            </span>
                        </p>
                        <br>
                        <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; padding-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_special_dish_img.php?id=" . $special_dish_info['id'] . "'>Edit</a></p>
                        <br>
                        </div>
                    </div>
                    <br>";                       
                        ?>
                        <!-- <button name="add_special_dish_info" class="btn btn-blk">Edit</button> -->
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <br>
        </div>


        <div id="special-dish-bkgd-img" class='form-container' style="display: flex; gap:4rem;">
            <div style="padding:10px; max-width:500px; min-width:300px">
                <br>
                <div>
                    <h2>background image </h2>
                    <?php
                        if(isset($_SESSION['empty_bkgd_image'])) {
                            echo "<div style='border:1px solid red; padding:10px'>
                                    <p style='color:red;font-weight:bold; font-size:2rem';>" . $_SESSION['empty_bkgd_image'] . "</p>";
                            unset ($_SESSION['empty_bkgd_image']);
                        }
                        ?>
                </div>
                <br>
                <div
                    style="display:flex; flex-direction:column; gap:1rem; padding:10px;max-width:500px; min-width:300px">

                    <?php
                    $special_dish_info_query = "SELECT * FROM special_dish";
                    $special_dish_info_result = mysqli_query($conn, $special_dish_info_query);
                    ?>
                    <?php while ($special_dish_info = mysqli_fetch_assoc($special_dish_info_result)) : ?>
                    <div class='nth-child-bkgd-color'
                        style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                        <input type="hidden" name="id" value="<?= $special_dish_info['id'] ?>">
                        <?php
                            GLOBAL $special_dish_id;
                            $special_dish_id = $special_dish_info['id'];
                            ?>

                        <p style="max-width:100vw">
                            <span
                                style="display:flex; flex-direction:column; align-items:center; font-weight:bold">
                                image:
                                <img style='width:100%' src='assets/images/<?= $special_dish_info['special_dish_bkgd_img'] ?>'
                                    alt="<?= $special_dish_info['special_dish_bkgd_img_desc'] ?>">
                            </span>
                        </p>
                        <br>
                        <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; padding-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_special_dish_bkgd_img.php?id=" . $special_dish_info['id'] . "'>Edit</a></p>
                        <br>
                        </div>
                    </div>
                    <br>";                       
                        ?>
                        <!-- <button name="add_special_dish_info" class="btn btn-blk">Edit</button> -->
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <br>
        </div>


        </div>
        </div>
    </section>
    <script src="js/closeModals.js" defer></script>
</body>

</html>