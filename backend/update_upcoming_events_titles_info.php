<?php
session_start();
require 'db.php';

if (($_SERVER["REQUEST_METHOD"] != "GET") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header ('location:../index');
} elseif($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
  $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
  $upcoming_events_titles_info_query = "SELECT * FROM upcoming_events WHERE id = $id";
  $upcoming_events_titles_info_result = mysqli_query($conn, $upcoming_events_titles_info_query);
  $upcoming_events_titles_info = mysqli_fetch_assoc($upcoming_events_titles_info_result);
} else {
  header ('location: ../index.php');
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
        <title>Update upcoming events titles</title>
    </head>

    <body>

        <section style='padding: 20px; width:100vw; display:flex; justify-content: center; align-content:center'>
            <div style='width: 100%; max-width: 525px;'>
                <a style='font-size:18px' href="../edit_upcoming_events_info.php"> Back</a>
                <h2 style='font-size:22px; padding: 30px;'>edit upcoming events titles</h2>
                <form style=" display:flex; flex-direction:column; gap 1rem; width:100%"
                    action="update_upcoming_events_info_logic.php" enctype="multipart/form-data" method="POST">

                    <input type="hidden" name="id" value="<?php $id ?>" placeholder="<?= $id ?>">
                    <input style="margin-bottom:1rem" type="hidden" name="id" value="<?= $upcoming_events_titles_info['id'] ?>" />

                    <div style="display: flex; flex-direction:column; font-size:22px; gap: 1rem">

                        <label for="upcoming_events_small_top_title">small top title:</label>
                        <input style="padding:10px; font-size: 22px" type="text" name="upcoming_events_small_top_title"
                        id="upcoming_events_small_top_title" value="<?= $upcoming_events_titles_info['upcoming_events_small_top_title'] ?>" />                     

                        <label for="upcoming_events_main_title">main title</label>
                        <input style="padding:10px; font-size: 22px" type="text" name="upcoming_events_main_title"
                        id="upcoming_events_main_title" value="<?= $upcoming_events_titles_info['upcoming_events_main_title'] ?>" />

                        <button style=" font-size: 22px" type="submit" name="submit_update_upcoming_events_titles_info">Update</button>
                    </div>
                </form>
            </div>
        </section>
    </body>

    </html>