<?php
session_start();
require 'db.php';

if (($_SERVER["REQUEST_METHOD"] != "GET") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location: ../index');
} elseif($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
  $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
//   $header_logo_and_favicon_query = "SELECT * FROM header_logo_and_favicon";
  $header_logo_and_favicon_query = "SELECT * FROM header_logo_and_favicon WHERE id = $id";
  $header_logo_and_favicon_result = mysqli_query($conn, $header_logo_and_favicon_query);
  $header_logo_and_favicon = mysqli_fetch_assoc($header_logo_and_favicon_result);
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
        <title>Update Header</title>
    </head>

    <body>

        <section style='padding: 20px; width:100vw; display:flex; justify-content: center; align-content:center'>
            <div style='width: 100%; max-width: 525px;'>
                <a style='font-size:18px' href="../edit_header_info.php"> Back</a>
                <h2 style='font-size:22px; padding: 30px;'>Change Logo and Favicon</h2>
                <form style=" display:flex; flex-direction:column; gap 1rem; width:100%"
                    action="update_header_logo_and_favicon_logic.php" enctype="multipart/form-data" method="POST">

                    <input type="hidden" name="id" value="<?php $id ?>" placeholder="<?= $id ?>">

                    <input style="margin-bottom:1rem" type="hidden" name="id" value="<?= $header_logo_and_favicon['id'] ?>" />

                    <div style="display: flex; flex-direction:column; font-size:22px; gap: 1rem">

                        <label for="header_logo_and_favicon">logo and favicon image</label>
                        <input style=" font-size: 22px; padding:10px" type="file" name="image" id="header_logo_and_favicon"
                            value="" />

                        <label for="header_logo_and_favicon_desc">edit logo description</label>
                        <input style="padding:10px; font-size: 22px" type="text" name="header_logo_and_favicon_desc"
                            id="header_logo_and_favicon_desc" value="<?= $header_logo_and_favicon['header_logo_and_favicon_desc'] ?>" />

                        <label for="header_logo_and_favicon_title">edit favicon title</label>
                        <input style="padding:10px; font-size: 22px" type="text" name="header_logo_and_favicon_title"
                            id="header_logo_and_favicon_title" value="<?= $header_logo_and_favicon['header_logo_and_favicon_title'] ?>" />


                        <button style=" font-size: 22px" type="submit" name="submit_update_header_logo_and_favicon">Update
                            </button>
                            <br>
                    </div>
                </form>
            </div>
        </section>
    </body>

    </html>





    