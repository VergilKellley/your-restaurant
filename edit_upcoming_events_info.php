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
            <a href="index">Back</a>
        </div>

        <!-- UPCOMING EVENTS TITLES -->

        <div class='mobile-edit-photos' style='max-width:500px'>
            <div id="edit-titles">
                <h2>edit upcoming events</h2>
            </div>
            <br>
            <h2>event titles</h2>
            <div
                style=" display: flex; flex-direction:column; align-items:center; gap:1rem; overflow-y:scroll; border:1px solid #333; padding: 10px">

                <?php
                    $upcoming_events_info_query = "SELECT * FROM upcoming_events";
                    $upcoming_events_info_result = mysqli_query($conn, $upcoming_events_info_query);
                    ?>
                <?php while ($upcoming_events_info = mysqli_fetch_assoc($upcoming_events_info_result)) : ?>
                <div class='nth-child-bkgd-color'
                    style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                    <input type="hidden" name="id" value="<?= $upcoming_events_info['id'] ?>">
                    <?php
                            GLOBAL $upcoming_events_id;
                            $upcoming_events_id = $upcoming_events_info['id'];
                            ?>
                    <br>
                    <p>small top title:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$upcoming_events_info['upcoming_events_small_top_title']; ?></span>
                    </p>
                    <br>
                    <p>main title:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$upcoming_events_info['upcoming_events_main_title']; ?></span>
                    </p>
                    <br>
                    <?php               
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; margin-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_upcoming_events_titles_info.php?id=" . $upcoming_events_info['id'] . "'>Edit</a></p>
                        </div>";                       
                        ?>
                    <?php endwhile ?>
                </div>
            </div>
        </div>

        <!-- IMAGE 1 -->

        <div class='form-container' style="display: flex; flex-direction:column; gap:4rem;">
            <div style="padding:10px; max-width:500px; min-width:300px">
                <br>
                <div id="edit-img-1">
                    <h2>image 1</h2>
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
                    $upcoming_events_info_query = "SELECT * FROM upcoming_events";
                    $upcoming_events_info_result = mysqli_query($conn, $upcoming_events_info_query);
                    ?>
                    <?php while ($upcoming_events_info = mysqli_fetch_assoc($upcoming_events_info_result)) : ?>
                    <div class='nth-child-bkgd-color'
                        style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                        <input type="hidden" name="id" value="<?= $upcoming_events_info['id'] ?>">
                        <?php
                            GLOBAL $upcoming_events_id;
                            $upcoming_events_id = $upcoming_events_info['id'];
                            ?>

                        <p style="max-width:100vw">
                            <span
                                style="display:flex; flex-direction:column; align-items:center; font-weight:bold">
                                image 1:
                                <img style='width:100px' src='assets/images/<?= $upcoming_events_info['upcoming_events_img_1'] ?>'
                                    alt="<?= $upcoming_events_info['upcoming_events_img_desc_1'] ?>">
                                    <br>
                                    <p style="font-weight:bold">image description:</p>
                                    <p><?= $upcoming_events_info['upcoming_events_img_desc_1'] ?></p>
                            </span>
                        </p>
                        <br>
                        <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; padding-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_upcoming_events_img_1.php?id=" . $upcoming_events_info['id'] . "'>Edit</a></p>
                        <br>
                        </div>
                    </div>
                    <br>";                       
                        ?>
                        <!-- <button name="add_upcoming_events_info" class="btn btn-blk">Edit</button> -->
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <br>

            <!-- IMAGE INFO 1 -->

            <div class='mobile-edit-photos' style='max-width:500px'>
            <div id="edit-info-1">
                <h2>image info 1</h2>
            </div>
            <br>
            <div
                style=" display: flex; flex-direction:column; align-items:center; gap:1rem; overflow-y:scroll; border:1px solid #333; padding: 10px">

                <?php
                    $upcoming_events_info_query = "SELECT * FROM upcoming_events";
                    $upcoming_events_info_result = mysqli_query($conn, $upcoming_events_info_query);
                    ?>
                <?php while ($upcoming_events_info = mysqli_fetch_assoc($upcoming_events_info_result)) : ?>
                <div class='nth-child-bkgd-color'
                    style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                    <input type="hidden" name="id" value="<?= $upcoming_events_info['id'] ?>">
                    <?php
                            GLOBAL $upcoming_events_id;
                            $upcoming_events_id = $upcoming_events_info['id'];
                            ?>

                    <br>

                    <p style='font-weight:bold'>title:</p>
                    <p style="max-width:100vw">
                        <span><?=$upcoming_events_info['upcoming_events_img_title_1']; ?></span>
                    </p>
                    <br>
                    <p style='font-weight:bold'>text:</p>
                    <p style="max-width:100vw">
                        <span><?=$upcoming_events_info['upcoming_events_img_text_1']; ?>
                        </span>
                    </p>
                    <br>
                    <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; margin-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_upcoming_events_info_1.php?id=" . $upcoming_events_info['id'] . "'>Edit</a></p>
                        </div>";                       
                        ?>
                    <?php endwhile ?>
                </div>
            </div>
        </div>


        <!-- IMAGE 2 -->
        <div class='form-container' style="display: flex; flex-direction:column; gap:4rem;">
            <div style="padding:10px; max-width:500px; min-width:300px">
                <br>
                <div id="edit-img-2">
                    <h2>image 2</h2>
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
                    $upcoming_events_info_query = "SELECT * FROM upcoming_events";
                    $upcoming_events_info_result = mysqli_query($conn, $upcoming_events_info_query);
                    ?>
                    <?php while ($upcoming_events_info = mysqli_fetch_assoc($upcoming_events_info_result)) : ?>
                    <div class='nth-child-bkgd-color'
                        style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                        <input type="hidden" name="id" value="<?= $upcoming_events_info['id'] ?>">
                        <?php
                            GLOBAL $upcoming_events_id;
                            $upcoming_events_id = $upcoming_events_info['id'];
                            ?>

                        <p style="max-width:100vw">
                            <span
                                style="display:flex; flex-direction:column; align-items:center; font-weight:bold">
                                image:
                                <img style='width:100px' src='assets/images/<?= $upcoming_events_info['upcoming_events_img_2'] ?>'
                                    alt="<?= $upcoming_events_info['upcoming_events_img_2'] ?>">
                                    <br>
                                    <p style="font-weight:bold">image description:</p>
                                    <p><?= $upcoming_events_info['upcoming_events_img_desc_2'] ?></p>
                            </span>
                        </p>
                        <br>
                        <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; padding-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_upcoming_events_img_2?id=" . $upcoming_events_info['id'] . "'>Edit</a></p>
                        <br>
                    </div>
                    <br>";                       
                        ?>
                        <!-- <button name="add_upcoming_events_info" class="btn btn-blk">Edit</button> -->
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>

<!-- IMAGE INFO 2 -->

<div class='mobile-edit-photos' style='max-width:500px'>
            <div>
                <h2 id="edit-info-2">image info 2</h2>
            </div>
            <br>
            <div
                style=" display: flex; flex-direction:column; align-items:center; gap:1rem; overflow-y:scroll; border:1px solid #333; padding: 10px">

                <?php
                    $upcoming_events_info_query = "SELECT * FROM upcoming_events";
                    $upcoming_events_info_result = mysqli_query($conn, $upcoming_events_info_query);
                    ?>
                <?php while ($upcoming_events_info = mysqli_fetch_assoc($upcoming_events_info_result)) : ?>
                <div class='nth-child-bkgd-color'
                    style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                    <input type="hidden" name="id" value="<?= $upcoming_events_info['id'] ?>">
                    <?php
                            GLOBAL $upcoming_events_id;
                            $upcoming_events_id = $upcoming_events_info['id'];
                            ?>

                    <br>

                    <p style='font-weight:bold'>title:</p>
                    <p style="max-width:100vw">
                        <span><?=$upcoming_events_info['upcoming_events_img_title_2']; ?></span>
                    </p>
                    <br>
                    <p style='font-weight:bold'>text:</p>
                    <p style="max-width:100vw">
                        <span><?=$upcoming_events_info['upcoming_events_img_text_2']; ?>
                        </span>
                    </p>
                    <br>
                    <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; margin-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_upcoming_events_info_2.php?id=" . $upcoming_events_info['id'] . "'>Edit</a></p>
                        </div>";                       
                        ?>
                    <?php endwhile ?>
                </div>
            </div>
        </div>

        <!-- IMAGE 3 -->

        <div class='form-container' style="display: flex; flex-direction:column; gap:4rem;">
            <div style="padding:10px; max-width:500px; min-width:300px">
                <br>
                <div id="edit-img-3">
                    <h2>image 3</h2>
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
                    $upcoming_events_info_query = "SELECT * FROM upcoming_events";
                    $upcoming_events_info_result = mysqli_query($conn, $upcoming_events_info_query);
                    ?>
                    <?php while ($upcoming_events_info = mysqli_fetch_assoc($upcoming_events_info_result)) : ?>
                    <div class='nth-child-bkgd-color'
                        style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                        <input type="hidden" name="id" value="<?= $upcoming_events_info['id'] ?>">
                        <?php
                            GLOBAL $upcoming_events_id;
                            $upcoming_events_id = $upcoming_events_info['id'];
                            ?>

                        <p style="max-width:100vw">
                            <span
                                style="display:flex; flex-direction:column; align-items:center; font-weight:bold">
                                image:
                                <img style='width:100px' src='assets/images/<?= $upcoming_events_info['upcoming_events_img_3'] ?>'
                                    alt="<?= $upcoming_events_info['upcoming_events_img_3'] ?>">
                                    <br>
                                    <p style="font-weight:bold">image description:</p>
                                    <p><?= $upcoming_events_info['upcoming_events_img_desc_3'] ?></p>
                            </span>
                        </p>
                        <br>
                        <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; padding-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_upcoming_events_img_3?id=" . $upcoming_events_info['id'] . "'>Edit</a></p>
                        <br>
                        </div>
                    </div>
                    <br>";                       
                        ?>
                        <!-- <button name="add_upcoming_events_info" class="btn btn-blk">Edit</button> -->
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>

           <!-- IMAGE INFO 3 -->

<div class='mobile-edit-photos' style='max-width:500px'>
            <div>
                <h2 id="edit-info-3">image info 3</h2>
            </div>
            <br>
            <div
                style=" display: flex; flex-direction:column; align-items:center; gap:1rem; overflow-y:scroll; border:1px solid #333; padding: 10px">

                <?php
                    $upcoming_events_info_query = "SELECT * FROM upcoming_events";
                    $upcoming_events_info_result = mysqli_query($conn, $upcoming_events_info_query);
                    ?>
                <?php while ($upcoming_events_info = mysqli_fetch_assoc($upcoming_events_info_result)) : ?>
                <div class='nth-child-bkgd-color'
                    style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                    <input type="hidden" name="id" value="<?= $upcoming_events_info['id'] ?>">
                    <?php
                            GLOBAL $upcoming_events_id;
                            $upcoming_events_id = $upcoming_events_info['id'];
                            ?>

                    <br>

                    <p style='font-weight:bold'>title:</p>
                    <p style="max-width:100vw">
                        <span><?=$upcoming_events_info['upcoming_events_img_title_3']; ?></span>
                    </p>
                    <br>
                    <p style='font-weight:bold'>text:</p>
                    <p style="max-width:100vw">
                        <span><?=$upcoming_events_info['upcoming_events_img_text_3']; ?>
                        </span>
                    </p>
                    <br>
                    <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; margin-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_upcoming_events_info_3.php?id=" . $upcoming_events_info['id'] . "'>Edit</a></p>
                        </div>";                       
                        ?>
                    <?php endwhile ?>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <script src="js/closeModals.js" defer></script>
</body>

</html>