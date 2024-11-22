<?php
session_start();
require "backend/db.php";

if (!isset($_SESSION["user_id"])) {

    header("Location: index");
}
// if (!isset($_SESSION["useruid"])) {

//     header("Location: index.php");
// }
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

        <div class='form-container' style="display: flex; gap:4rem;">
            <div style="padding:10px; max-width:500px; min-width:300px">
                <div>
                    <a href="index.php">Back</a>
                </div>
                <br>
                <div>
                    <h2>Edit Header & Favicon Image</h2>
                </div>
                <br>
                <div style="display:flex; flex-direction:column; gap:1rem; padding:10px;max-width:500px; min-width:300px">

                <?php
                    $header_info_query = "SELECT * FROM header_logo_and_favicon";
                    $header_info_result = mysqli_query($conn, $header_info_query);
                    ?>
                <?php while ($header_info = mysqli_fetch_assoc($header_info_result)) : ?>
                <div class='nth-child-bkgd-color'
                    style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                    <input type="hidden" name="id" value="<?= $header_info['id'] ?>">
                    <?php
                            GLOBAL $header_id;
                            $header_id = $header_info['id'];
                            ?>

                        <p style="max-width:100vw">
                            <span
                                style="display:flex; flex-direction:column; align-items:center; font-weight:bold">favicon
                                image:
                                <img style='width:100%' src='assets/images/<?= $header_info['header_logo_and_favicon'] ?>'
                                    alt="">
                            </span>
                        </p>
                    <br>
                    <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; padding-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_header_logo_and_favicon?id=" . $header_info['id'] . "'>Edit</a></p>
                        <br>
                        </div>
                    </div>
                    <br>";                       
                        ?>
                    <!-- <button name="add_header_info" class="btn btn-blk">Edit</button> -->
                    <?php endwhile; ?>
                </div>
                </div>
        </div>
        <br>
        <div class='mobile-edit-photos' style='max-width:500px'>
            <div>
                <h2>Edit Header Info</h2>
            </div>
            <br>
            <div
                style=" display: flex; flex-direction:column; align-items:center; gap:1rem; height: 500px; overflow-y:scroll; border:1px solid #333; padding: 10px">

                <?php
                    $header_info_query = "SELECT * FROM header_info";
                    $header_info_result = mysqli_query($conn, $header_info_query);
                    ?>
                <?php while ($header_info = mysqli_fetch_assoc($header_info_result)) : ?>
                <div class='nth-child-bkgd-color'
                    style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                    <input type="hidden" name="id" value="<?= $header_info['id'] ?>">
                    <?php
                            GLOBAL $header_id;
                            $header_id = $header_info['id'];
                            ?>

                    <br>


                   
                        <!-- <p style="max-width:100vw">
                            <span
                                style="display:flex; flex-direction:column; align-items:center; font-weight:bold">favicon
                                image:
                                <img style='width:100%' src='assets/images/<?= $header_info['header_logo_favicon'] ?>'
                                    alt="">
                            </span>
                        </p> -->
                        <br>
                        </p>
                        <p style="max-width:256px">
                            <p style='font-weight:bold;'>business name font link:</p>
                            <span style='overflow-wrap:break-word'><?= $header_info['business_name_font']; ?></span>
                        </p>
                        <br>

                        <!-- HERO SLIDERS -->
                        <!-- <p style="max-width:100vw">
                            <span style='font-weight:bold'>hero image 1: </span>
                            <img style='width:100%' src='uploads/<?=$header_info['hero_slider_img_1']; ?>'
                                alt="<?= $header_info['hero_slider_img_desc_1'] ?>">
                        </p>
                        <p style="max-width:100vw">
                            <span style='font-weight:bold'>hero image description 1:
                                <?=$header_info['hero_slider_img_desc_1']; ?></span>
                        </p>
                        <br>
                        <p style="max-width:100vw">
                            <span style='font-weight:bold'>hero image 2:</span>
                            <img style='width:100%' src='uploads/<?=$header_info['hero_slider_img_2']; ?>'
                                alt="<?= $header_info['hero_slider_img_desc_2'] ?>">

                            </span>
                        </p>
                        <p style="max-width:100vw">
                            <span style='font-weight:bold'>hero image description 2:
                                <?=$header_info['hero_slider_img_desc_2']; ?></span>
                        </p>
                        <br>

                        <p style="max-width:100vw">
                            <span style='font-weight:bold'>hero image 3:</span>
                            <img style='width:100%' src='uploads/<?=$header_info['hero_slider_img_3']; ?>'
                                alt="<?= $header_info['hero_slider_img_desc_3'] ?>">
                        </p>
                        <p style="max-width:100vw">
                            <span style='font-weight:bold'>hero image description 3:
                                <?=$header_info['hero_slider_img_desc_3']; ?></span>
                        </p> -->
                        
                        <p style="max-width:100vw">
                            <span style='font-weight:bold'>street address: <?=$header_info['street_address']; ?></span>
                        </p>
                        <br>

                        <!-- BUSINESS HOURS -->
                        <p>business hours</p>
                        <p style="max-width:100vw">
                            <span style='font-weight:bold'>Monday: <?=$header_info['business_hours_mon']; ?></span>
                        </p>
                        <br>
                        <p style="max-width:100vw">
                            <span style='font-weight:bold'>Tuesday: <?=$header_info['business_hours_tue']; ?></span>
                        </p>
                        <br>
                        <p style="max-width:100vw">
                            <span style='font-weight:bold'>Wednesday: <?=$header_info['business_hours_wed']; ?></span>
                        </p>
                        <br>
                        <p style="max-width:100vw">
                            <span style='font-weight:bold'>Thursday: <?=$header_info['business_hours_thur']; ?></span>
                        </p>
                        <br>
                        <p style="max-width:100vw">
                            <span style='font-weight:bold'>Friday: <?=$header_info['business_hours_fri']; ?></span>
                        </p>
                        <br>
                        <p style="max-width:100vw">
                            <span style='font-weight:bold'>Saturday: <?=$header_info['business_hours_sat']; ?></span>
                        </p>
                        <br>
                        <p style="max-width:100vw">
                            <span style='font-weight:bold'>Sunday: <?=$header_info['business_hours_sun']; ?></span>
                        </p>
                        <br>
                        <p style="max-width:100vw">
                            <span style='font-weight:bold'>phone: <?= $header_info['phone']; ?></span>
                        </p>
                        <br>
                        <p style="max-width:100vw">
                            <span style='font-weight:bold'>email: <?= $header_info['email']; ?></span>
                        </p>
                    
                    <br>
                    <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; margin-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_header_info.php?id=" . $header_info['id'] . "'>Edit</a></p>

                        
                                    </div>
                        </div>";                       
                        ?>
                    <?php endwhile ?>

                    <!-- <form action='backend/delete_header_info.php' method='POST'>
                                        <button class='btn btn-delete' style='margin-left:20px' id='btn-delete' type='submit' name='delete_header_info' value='" . $header_info['id'] . "'> Delete</button>
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