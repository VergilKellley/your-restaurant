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
        #hero-edits {
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
    <section id='hero-edits' class="stylist_info_1_container;"
        style="display:flex; flex-direction:column; justify-content:center; place-items:center; margin: 0 auto; gap:1rem; flex-wrap:wrap">
        <br>
        <div class='mobile-edit-photos' style='max-width:500px'>
            <div id="hero-img-1">
                <a href="index.php">Back</a>
                <h2>edit hero image 1</h2>
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
                style=" display: flex; flex-direction:column; align-items:center; gap:1rem; padding: 10px">

                <?php
                    $hero_info_1_query = "SELECT * FROM hero_img_1";
                    $hero_info_1_result = mysqli_query($conn, $hero_info_1_query);
                    ?>
                <?php while ($hero_info_1 = mysqli_fetch_assoc($hero_info_1_result)) : ?>
                <div class='nth-child-bkgd-color'
                    style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                    <input type="hidden" name="id" value="<?= $hero_info_1['id'] ?>">
                    <?php
                            GLOBAL $hero_id;
                            $hero_id = $hero_info_1['id'];
                            ?>

                    <br>

                    <!-- HERO IMAGE 1 -->

                    <p style="max-width:100vw">
                        <span style="display:flex; flex-direction:column; align-items:center; font-weight:bold">hero
                            image:
                            <img style='width:100%' src='assets/images/<?= $hero_info_1['hero_img_1'] ?>'
                                value='<?= $hero_img_1; ?>' alt="<?= $hero_info_1['hero_img_desc_1']; ?>">
                        </span>
                    </p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'>hero image description:
                            <?= $hero_info_1['hero_img_desc_1']; ?></span>
                    </p>
                    <br>

                    <br>
                    <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; margin-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_hero_image_1.php?id=" . $hero_info_1['id'] . "'>Edit</a></p>
                         </div>
                        </div>";                       
                        ?>
                    <?php endwhile ?>
                </div>
            </div>
        </div>

        <br>
        <br>
        <!-- HERO INFO 1 -->
        <div class='mobile-edit-photos' style='max-width:500px'>
            <div id="hero-info-1">
                <a href="">.</a>
                <h2>edit hero info 1</h2>
            </div>
            <br>
            <div
                style=" display: flex; flex-direction:column; align-items:center; gap:1rem; border:1px solid #333; padding: 10px">

                <?php
                    $hero_info_1_query = "SELECT * FROM hero_info_1";
                    $hero_info_1_result = mysqli_query($conn, $hero_info_1_query);
                    ?>
                <?php while ($hero_info_1 = mysqli_fetch_assoc($hero_info_1_result)) : ?>
                <div class='nth-child-bkgd-color'
                    style='padding:10px; line-height: 1.5; max-width:100%'>
                    <input type="hidden" name="id" value="<?= $hero_info_1['id'] ?>">
                    <?php
                            GLOBAL $hero_id;
                            $hero_id = $hero_info_1['id'];
                            ?>

                    <br>

                    <br>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'>top small text: <?= $hero_info_1['hero_top_text_1']; ?></span>
                    </p>
                    <br>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'>large text 1: <?= $hero_info_1['hero_large_text_1']; ?></span>
                    </p>

                    <p style="max-width:100vw">
                        <span style='font-weight:bold'>bottom small
                            text:<?= $hero_info_1['hero_bottom_text_1']; ?></span>
                    </p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'>top button text:
                            <?= $hero_info_1['hero_top_btn_text_1']; ?></span>
                    </p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold;overflow-wrap: break-word;'>top button link:
                            <?= $hero_info_1['hero_top_btn_link_1']; ?></span>
                    </p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'>bottom button text:
                            <?= $hero_info_1['hero_bottom_btn_text_1']; ?></span>
                    </p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold;overflow-wrap: break-word;'>bottom button link:
                            <?= $hero_info_1['hero_bottom_btn_link_1']; ?></span>
                    </p>
                    <br>
                    <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; margin-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_hero_info_1.php?id=" . $hero_info_1['id'] . "'>Edit</a></p>
                         </div>
                        </div>";                       
                        ?>
                    <?php endwhile ?>
                </div>
            </div>
        </div>
        </div>
        </div>

        <br>
        <br>

        <div class='mobile-edit-photos' style='max-width:500px'>
            <div id="hero-img-2">
                <a href="index.php">Back</a>
                <h2>edit hero image 2</h2>
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
                style=" display: flex; flex-direction:column; align-items:center; gap:1rem;border:1px solid #333; padding: 10px">

                <?php
                    $hero_info_2_query = "SELECT * FROM hero_img_2";
                    $hero_info_2_result = mysqli_query($conn, $hero_info_2_query);
                    ?>
                <?php while ($hero_info_2 = mysqli_fetch_assoc($hero_info_2_result)) : ?>
                <div class='nth-child-bkgd-color'
                    style=' padding:10px; line-height: 1.5; max-width:100%'>
                    <input type="hidden" name="id" value="<?= $hero_info_2['id'] ?>">
                    <?php
                            GLOBAL $hero_id;
                            $hero_id = $hero_info_2['id'];
                            ?>

                    <br>

                    <!-- HERO IMAGE 2 -->

                    <p style="max-width:100vw">
                        <span style="display:flex; flex-direction:column; align-items:center; font-weight:bold">hero
                            image:
                            <img style='width:100%' src='assets/images/<?= $hero_info_2['hero_img_2'] ?>'
                                value='<?= $hero_img_2; ?>' alt="<?= $hero_info_2['hero_img_desc_2']; ?>">
                        </span>
                    </p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'>hero image description:
                            <?= $hero_info_2['hero_img_desc_2']; ?></span>
                    </p>
                    <br>

                    <br>
                    <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; margin-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_hero_image_2.php?id=" . $hero_info_2['id'] . "'>Edit</a></p>
                         </div>
                        </div>";                       
                        ?>
                    <?php endwhile ?>
                </div>
            </div>
        </div>


        <br>
        <br>

        <!-- HERO INFO 2 -->
<div class='mobile-edit-photos' style='max-width:500px'>
            <div id="hero-info-2">
                <a href="">.</a>
                <h2>edit hero info 2</h2>
            </div>
            <br>
            <div
                style=" display: flex; flex-direction:column; align-items:center; gap:1rem; border:1px solid #333; padding: 10px">

                <?php
                    $hero_info_2_query = "SELECT * FROM hero_info_2";
                    $hero_info_2_result = mysqli_query($conn, $hero_info_2_query);
                    ?>
                <?php while ($hero_info_2 = mysqli_fetch_assoc($hero_info_2_result)) : ?>
                <div class='nth-child-bkgd-color'
                    style=' padding:10px; line-height: 1.5; max-width:100%'>
                    <input type="hidden" name="id" value="<?= $hero_info_2['id'] ?>">
                    <?php
                            GLOBAL $hero_id;
                            $hero_id = $hero_info_2['id'];
                            ?>

                    <br>

                    <br>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'>top small text: <?= $hero_info_2['hero_top_text_2']; ?></span>
                    </p>
                    <br>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'>large text 1: <?= $hero_info_2['hero_large_text_2']; ?></span>
                    </p>

                    <p style="max-width:100vw">
                        <span style='font-weight:bold'>bottom small
                            text:<?= $hero_info_2['hero_bottom_text_2']; ?></span>
                    </p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'>top button text:
                            <?= $hero_info_2['hero_top_btn_text_2']; ?></span>
                    </p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold;overflow-wrap: break-word;'>top button link:
                            <?= $hero_info_2['hero_top_btn_link_2']; ?></span>
                    </p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'>bottom button text:
                            <?= $hero_info_2['hero_bottom_btn_text_2']; ?></span>
                    </p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold;overflow-wrap: break-word;'>bottom button link:
                            <?= $hero_info_2['hero_bottom_btn_link_2']; ?></span>
                    </p>
                    <br>
                    <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; margin-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_hero_info_2.php?id=" . $hero_info_2['id'] . "'>Edit</a></p>
                         </div>
                        </div>";                       
                        ?>
                    <?php endwhile ?>
                </div>
            </div>
        </div>
        </div>
        </div>
        <br>
        <br>
        <div class='mobile-edit-photos' style='max-width:500px'>
            <div id="hero-img-3">
                <a href="index.php">Back</a>
                <h2>edit hero image 3</h2>
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
                style=" display: flex; flex-direction:column; align-items:center; gap:1rem; border:1px solid #333; padding: 10px">

                <?php
                    $hero_info_3_query = "SELECT * FROM hero_img_3";
                    $hero_info_3_result = mysqli_query($conn, $hero_info_3_query);
                    ?>
                <?php while ($hero_info_3 = mysqli_fetch_assoc($hero_info_3_result)) : ?>
                <div class='nth-child-bkgd-color'
                    style='padding:10px; line-height: 1.5; max-width:100%'>
                    <input type="hidden" name="id" value="<?= $hero_info_3['id'] ?>">
                    <?php
                            GLOBAL $hero_id;
                            $hero_id = $hero_info_3['id'];
                            ?>

                    <br>

                    <!-- HERO IMAGE 3 -->

                    <p style="max-width:100vw">
                        <span style="display:flex; flex-direction:column; align-items:center; font-weight:bold">hero
                            image:
                            <img style='width:100%' src='assets/images/<?= $hero_info_3['hero_img_3'] ?>'
                                value='<?= $hero_img_3; ?>' alt="<?= $hero_info_3['hero_img_desc_3']; ?>">
                        </span>
                    </p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'>hero image description:
                            <?= $hero_info_3['hero_img_desc_3']; ?></span>
                    </p>
                    <br>

                    <br>
                    <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; margin-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_hero_image_3.php?id=" . $hero_info_3['id'] . "'>Edit</a></p>
                         </div>
                        </div>";                       
                        ?>
                    <?php endwhile ?>
                </div>
            </div>
        </div>
        <br>
        <br>
        <!-- HERO INFO 3 -->
        <div class='mobile-edit-photos' style='max-width:500px'>
            <div id="hero-info-3">
                <a href="">.</a>
                <h2>edit hero info 3</h2>
            </div>
            <br>
            <div
                style=" display: flex; flex-direction:column; align-items:center; gap:1rem;border:1px solid #333; padding: 10px">

                <?php
                    $hero_info_3_query = "SELECT * FROM hero_info_3";
                    $hero_info_3_result = mysqli_query($conn, $hero_info_3_query);
                    ?>
                <?php while ($hero_info_3 = mysqli_fetch_assoc($hero_info_3_result)) : ?>
                <div class='nth-child-bkgd-color'
                    style='padding:10px; line-height: 1.5; max-width:100%'>
                    <input type="hidden" name="id" value="<?= $hero_info_3['id'] ?>">
                    <?php
                            GLOBAL $hero_id;
                            $hero_id = $hero_info_3['id'];
                            ?>

                    <br>

                    <br>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'>top small text: <?= $hero_info_3['hero_top_text_3']; ?></span>
                    </p>
                    <br>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'>large text 1: <?= $hero_info_3['hero_large_text_3']; ?></span>
                    </p>

                    <p style="max-width:100vw">
                        <span style='font-weight:bold'>bottom small
                            text:<?= $hero_info_3['hero_bottom_text_3']; ?></span>
                    </p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'>top button text:
                            <?= $hero_info_3['hero_top_btn_text_3']; ?></span>
                    </p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold;overflow-wrap: break-word;'>top button link:
                            <?= $hero_info_3['hero_top_btn_link_3']; ?></span>
                    </p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'>bottom button text:
                            <?= $hero_info_3['hero_bottom_btn_text_3']; ?></span>
                    </p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold;overflow-wrap: break-word;'>bottom button link:
                            <?= $hero_info_3['hero_bottom_btn_link_3']; ?></span>
                    </p>
                    <br>
                    <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; margin-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_hero_info_3.php?id=" . $hero_info_3['id'] . "'>Edit</a></p>
                         </div>
                        </div>";                       
                        ?>
                    <?php endwhile ?>
                </div>
            </div>
        </div>
        </div>
        </div> 
        </div>
        <br>
        <br>
        <br>
    </section>
    <script src="js/closeModals.js" defer></script>
</body>

</html>