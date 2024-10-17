<?php
session_start();
require 'db.php';

if (($_SERVER["REQUEST_METHOD"] != "GET") || (!isset($_SESSION["user_id"]))) {
    // exit("GET request method required");
    header('location:../index');
} elseif($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
  $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
  $header_info_query = "SELECT * FROM header_info WHERE id = $id";
  $header_info_result = mysqli_query($conn, $header_info_query);
  $header_info = mysqli_fetch_assoc($header_info_result);
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
                <h2 style='font-size:22px; padding: 30px;'>Edit</h2>
                <form style=" display:flex; flex-direction:column; gap 1rem; width:100%"
                    action="update_header_info_logic.php" enctype="multipart/form-data" method="POST">
                    <input type="hidden" name="id" value="<?php $id ?>" placeholder="<?= $id ?>">
                    <input style="margin-bottom:1rem" type="hidden" name="id" value="<?= $header_info['id'] ?>" />

                    <div style="display: flex; flex-direction:column; font-size:22px; gap: 1rem">

                        <label for="business_name_font">business name font link</label>
                        <input style="padding:10px; font-size: 22px" type="text" name="business_name_font"
                            id="business_name_font" value="<?= $header_info['business_name_font'] ?>" />

                        <label for="street_address">street address</label>
                        <input style="padding:10px; font-size: 22px" type="text" name="street_address"
                            id="street_address" value="<?= $header_info['street_address'] ?>" />

                            <label for="street_address">Monday business hours</label>
                            <input style="padding:10px; font-size: 22px" type="text" name="business_hours_mon"
                            id="business_hours_mon" value="<?= $header_info['business_hours_mon'] ?>" />

                            <label for="street_address">Tuesday business hours</label>
                            <input style="padding:10px; font-size: 22px" type="text" name="business_hours_tue"
                            id="business_hours_tue" value="<?= $header_info['business_hours_tue'] ?>" />

                            <label for="street_address">Wednesday business hours</label>
                            <input style="padding:10px; font-size: 22px" type="text" name="business_hours_wed" id="business_hours_wed" value="<?= $header_info['business_hours_wed'] ?>" />

                            <label for="street_address">Thursday business hours</label>
                            <input style="padding:10px; font-size: 22px" type="text" name="business_hours_thur" id="business_hours_thur" value="<?= $header_info['business_hours_thur'] ?>" />

                            <label for="street_address">Friday business hours</label>
                            <input style="padding:10px; font-size: 22px" type="text" name="business_hours_fri" id="business_hours_fri" value="<?= $header_info['business_hours_fri'] ?>" />

                            <label for="street_address">Saturday business hours</label>
                            <input style="padding:10px; font-size: 22px" type="text" name="business_hours_sat" id="business_hours_sat" value="<?= $header_info['business_hours_sat'] ?>" />

                            <label for="street_address">Sunday business hours</label>
                            <input style="padding:10px; font-size: 22px" type="text" name="business_hours_sun" id="business_hours_sun" value="<?= $header_info['business_hours_sun'] ?>" />

                            <label for="street_address">phone</label>
                            <input style="padding:10px; font-size: 22px" type="text" name="phone" id="phone" value="<?= $header_info['phone'] ?>" />

                            <label for="street_address">email</label>
                            <input style="padding:10px; font-size: 22px" type="text" name="email" id="email" value="<?= $header_info['email'] ?>" />

                        <button style=" font-size: 22px" type="submit" name="submit_update_header_info">Update</button>
                    </div>
                </form>
            </div>
        </section>
    </body>

    </html>





    