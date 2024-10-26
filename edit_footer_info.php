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
            <a href="index">Back</a>
        </div>
        <div class='mobile-edit-photos' style='max-width:500px'>
            <div>
                <h2>edit footer</h2>
            </div>
            <br>
            <div
                style=" display: flex; flex-direction:column; align-items:center; gap:1rem; height: 500px; overflow-y:scroll; border:1px solid #333; padding: 10px">

                <?php
                    $footer_info_query = "SELECT * FROM footer";
                    $footer_info_result = mysqli_query($conn, $footer_info_query);
                    ?>
                <?php while ($footer_info = mysqli_fetch_assoc($footer_info_result)) : ?>
                <div class='nth-child-bkgd-color'
                    style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                    <input type="hidden" name="id" value="<?= $footer_info['id'] ?>">
                    <?php
                            GLOBAL $footer_id;
                            $footer_id = $footer_info['id'];
                            ?>

                    <br>

                    <p>main title:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$footer_info['footer_main_title']; ?></span>
                    </p>
                    <br>
                    <p>sub title:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$footer_info['footer_sub_title']; ?></span>
                    </p>
                    <br>
                    
                    <br>
                    <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; margin-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_footer_titles_info.php?id=" . $footer_info['id'] . "'>Edit</a></p>
                        </div>";                       
                        ?>
                    <?php endwhile ?>
                </div>
            </div>
        </div>

        <div class='form-container' style="display: flex; gap:4rem;">
            <div style="padding:10px; max-width:500px; min-width:300px">
                <br>
                <div
                    style="display:flex; flex-direction:column; gap:1rem; padding:10px;max-width:500px; min-width:300px">

                    <?php
                    $footer_info_query = "SELECT * FROM footer";
                    $footer_info_result = mysqli_query($conn, $footer_info_query);
                    ?>
                    <?php while ($footer_info = mysqli_fetch_assoc($footer_info_result)) : ?>
                    <div class='nth-child-bkgd-color'
                        style='border:1px solid #333; padding:10px; line-height: 1.5; max-width:100%'>
                        <input type="hidden" name="id" value="<?= $footer_info['id'] ?>">
                        <?php
                            GLOBAL $footer_id;
                            $footer_id = $footer_info['id'];
                            ?>

                    <p>facebook:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$footer_info['footer_facebook']; ?></span>
                    </p>

                    <p>instagram:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$footer_info['footer_instagram']; ?></span>
                    </p>
                    <p>YouTube:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$footer_info['footer_youtube']; ?></span>
                    </p>
                    <p>Google Map:</p>
                    <p style="max-width:100vw">
                        <span style='font-weight:bold'><?=$footer_info['footer_google_map']; ?></span>
                    </p>
                        <br>
                        <?php
                    
                        echo "
                        <div style='display:flex; justify-content:center; align-items:center; padding-bottom:20px'>
                        <p><a class='btn btn-edit' href='backend/update_footer_social_media_info.php?id=" . $footer_info['id'] . "'>Edit</a></p>
                        <br>
                        </div>
                    </div>
                    <br>";                       
                        ?>
                        <!-- <button name="add_footer_info" class="btn btn-blk">Edit</button> -->
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