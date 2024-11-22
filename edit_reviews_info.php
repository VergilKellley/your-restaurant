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
        <br>
        <div class='mobile-edit-photos' style='max-width:500px'>
            <div>
                <h2>edit background image</h2>
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
                style=" display: flex; flex-direction:column; align-items:center; gap:1rem;">

                <?php
                    $reviews_info_query = "SELECT * FROM reviews";
                    $reviews_info_result = mysqli_query($conn, $reviews_info_query);
                    ?>
                <?php while ($reviews_info = mysqli_fetch_assoc($reviews_info_result)) : ?>
                <div id="edit-bkgd-img" class='nth-child-bkgd-color'
                    style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                    <input type="hidden" name="id" value="<?= $reviews_info['id'] ?>">
                    <?php
                            GLOBAL $reviews_id;
                            $reviews_id = $reviews_info['id'];
                            ?>

                    <br>

                    <?php
                        if(isset($_SESSION['empty_bkgd_image'])) {
                            echo "<div style='border:1px solid red; padding:10px'>
                                    <p style='color:red;font-weight:bold; font-size:2rem';>" . $_SESSION['empty_bkgd_image'] . "</p>
                                    </div>";
                                
                            unset ($_SESSION['empty_bkgd_image']);
                        }
                        ?>
                    <p style="font-weight:bolder; margin-bottom:10px">current background image:</p>
                    <div style="display:flex;flex-direction:column; align-items:center;">
                        <img style="max-width:100%" src="assets/images/<?= $reviews_info['reviews_bkgd_img']; ?>"
                            alt="<?= $reviews_info['reviews_bkgd_img_desc']; ?>">
                    </div>
                    <br>
                    <p style="font-weight:bolder;">background image description:</p>
                    <p style="max-width:100vw">
                        <?= $reviews_info['reviews_bkgd_img_desc']; ?></span>
                    </p>
                    <br>
                    <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; margin-bottom:20px'>
                            <p><a class='btn btn-edit' href='backend/update_reviews_bkgd_img.php?id=" . $reviews_info['id'] . "'>Edit</a></p>
                        </div>";                       
                        ?>
                    <?php endwhile ?>
                </div>
            </div>
        </div>

        <div class='form-container' style="display: flex; gap:4rem;">
            <div style="padding:10px; max-width:500px; min-width:300px">
                <br>
                <div>
                    <h2>edit reviews</h2>

                </div>
                <br>
                <div
                    style="display:flex; flex-direction:column; gap:1rem; max-width:500px; min-width:300px">

                    <?php
                    $reviews_info_query = "SELECT * FROM reviews";
                    $reviews_info_result = mysqli_query($conn, $reviews_info_query);
                    ?>
                    <?php while ($reviews_info = mysqli_fetch_assoc($reviews_info_result)) : ?>
                    <div class='nth-child-bkgd-color'
                        style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                        <input type="hidden" name="id" value="<?= $reviews_info['id'] ?>">
                        <?php
                            GLOBAL $reviews_id;
                            $reviews_id = $reviews_info['id'];
                            ?>

                        <p style="max-width:100vw">
                            <span style="display:flex; flex-direction:column; align-items:center; font-weight:bold">
                                review:
                                <p><?= $reviews_info['review']; ?></p>
                            </span>
                        </p>
                        <br>
                        <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; padding-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_reviews_info.php?id=" . $reviews_info['id'] . "'>Edit</a></p>
                        <br>
                        </div>
                    </div>
                    <br>";                       
                        ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <br>

            <div class='mobile-edit-photos' style='max-width:500px'>
                <div id="edit-small-img">
                    <h2>edit reviews small image</h2>
                </div>
                <?php
                        if(isset($_SESSION['empty_small_image'])) {
                            echo "<div style='border:1px solid red; padding:10px'>
                                    <p style='color:red;font-weight:bold; font-size:2rem';>" . $_SESSION['empty_small_image'] . "</p>
                                    </div>";
                                
                            unset ($_SESSION['empty_small_image']);
                        }
                        ?>
                <br>
                <div
                    style=" display: flex; flex-direction:column; align-items:center; gap:1rem;">

                    <?php
                    $reviews_info_query = "SELECT * FROM reviews";
                    $reviews_info_result = mysqli_query($conn, $reviews_info_query);
                    ?>
                    <?php while ($reviews_info = mysqli_fetch_assoc($reviews_info_result)) : ?>
                    <div class='nth-child-bkgd-color'
                        style='border:1px solid #333; padding:10px; line-height: 1.5; width:100%'>
                        <input type="hidden" name="id" value="<?= $reviews_info['id'] ?>">
                        <?php
                            GLOBAL $reviews_id;
                            $reviews_id = $reviews_info['id'];
                            ?>

                        <br>

                        <p style="max-width:100vw; font-weight:bold">small image:</p>
                        <img style="width:100%" src="assets/images/<?=$reviews_info['reviews_small_img']; ?>" alt="<?=$reviews_info['reviews_small_img_desc']; ?>">
                        <br>

                        <p style="max-width:100vw; font-weight:bold">small image description:</p>
                            <span><?=$reviews_info['reviews_small_img_desc']; ?>
                        </span>                
                        <br>
                        <p style="max-width:100vw; font-weight:bold">small image text:</p>
                        <p style="max-width:100vw">
                            <span style='font-weight:bold'><?=$reviews_info['reviews_small_img_text']; ?></span>
                        </p>
                        <br>
                        <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; margin-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_reviews_small_img.php?id=" . $reviews_info['id'] . "'>Edit</a></p>
                        </div>";                       
                        ?>
                        <?php endwhile ?>

                        <!-- <form action='backend/delete_reviews_info.php' method='POST'>
                                        <button class='btn btn-delete' style='margin-left:20px' id='btn-delete' type='submit' name='delete_reviews_info' value='" . $reviews_info['id'] . "'> Delete</button>
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