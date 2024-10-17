<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] != "GET") {
    exit("GET request method required");
} elseif($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
  $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
  $about_info_query = "SELECT * FROM about WHERE id = $id";
  $about_info_result = mysqli_query($conn, $about_info_query);
  $about_info = mysqli_fetch_assoc($about_info_result);
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
        <title>Update abouttions</title>
    </head>

    <body>
 
        <section style='padding: 20px; width:100vw; display:flex; justify-content: center; align-content:center'>
            <div style='width: 100%; max-width: 525px;'>
                <a style='font-size:18px' href="../edit_about_info.php"> Back</a>
                <h2 style='font-size:22px; padding: 30px;'>Edit</h2>
                
                <form style=" display:flex; flex-direction:column; gap 1rem; width:100%"
                    action="update_about_info_logic.php" enctype="multipart/form-data" method="POST">

                    <input type="hidden" name="id" value="<?php $id ?>" placeholder="<?= $id ?>">

                    <input style="margin-bottom:1rem" type="hidden" name="id" value="<?= $about_info['id'] ?>" />

                    <div style="display: flex; flex-direction:column; font-size:22px; gap: 1rem">


                        <label for="about_small_title">small title </label>
                        <input style="padding:10px; font-size: 22px" type="text" name="about_small_title"
                            id="about_small_title" value="<?= $about_info['about_small_title']; ?>" />

                        <label for="about_main_title">main title </label>
                        <input style="padding:10px; font-size: 22px" type="text" name="about_main_title"
                            id="about_small_title" value="<?= $about_info['about_main_title']; ?>" />

                        <label for="about_text">text </label>
                        <input style="padding:10px; font-size: 22px" type="text" name="about_text"
                            id="about_text" value="<?= $about_info['about_text']; ?>" />

                        <label for="about_sub_title">sub-title </label>
                        <input style="padding:10px; font-size: 22px" type="text" name="about_sub_title"
                            id="about_sub_title" value="<?= $about_info['about_sub_title']; ?>" />

                        <label for="about_since_year">since year </label>
                        <input style="padding:10px; font-size: 22px" type="text" name="about_since_year"
                            id="about_since_year" value="<?= $about_info['about_since_year']; ?>" />

                        <button style=" font-size: 22px" type="submit" name="submit_update_about_info">Update
                            </button>
                    </div>
                </form>
            </div>
        </section>
    </body>

    </html>