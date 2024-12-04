<?php
require 'db.php';
//Display Website colors 
$sql = "SELECT * FROM menu_item;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {   
    $entre_menu_item_img = $row['entre_menu_item_img'];
    $entre_menu_item_img_desc = $row['entre_menu_item_img_desc'];
    $entre_menu_item_name = $row['entre_menu_item_name'];
    $entre_menu_item_desc = $row['entre_menu_item_desc'];
    $entre_menu_item_price = $row['entre_menu_item_price'];
    $entre_menu_item_text = $row['entre_menu_item_text'];
    $entre_menu_item_num = $row['entre_menu_item_num'];

    $appetizer_menu_item_img = $row['appetizer_menu_item_img'];
    $appetizer_menu_item_img_desc = $row['appetizer_menu_item_img_desc'];
    $appetizer_menu_item_name = $row['appetizer_menu_item_name'];
    $appetizer_menu_item_desc = $row['appetizer_menu_item_desc'];
    $appetizer_menu_item_price = $row['appetizer_menu_item_price'];
    $appetizer_menu_item_text = $row['appetizer_menu_item_text'];
    $appetizer_menu_item_num = $row['appetizer_menu_item_num'];

    $dessert_menu_item_img = $row['dessert_menu_item_img'];
    $dessert_menu_item_img_desc = $row['dessert_menu_item_img_desc'];
    $dessert_menu_item_name = $row['dessert_menu_item_name'];
    $dessert_menu_item_desc = $row['dessert_menu_item_desc'];
    $dessert_menu_item_price = $row['dessert_menu_item_price'];
    $dessert_menu_item_text = $row['dessert_menu_item_text'];
    $dessert_menu_item_num = $row['dessert_menu_item_num'];

    $drinks_menu_item_img = $row['drinks_menu_item_img'];
    $drinks_menu_item_img_desc = $row['drinks_menu_item_img_desc'];
    $drinks_menu_item_name = $row['drinks_menu_item_name'];
    $drinks_menu_item_desc = $row['drinks_menu_item_desc'];
    $drinks_menu_item_price = $row['drinks_menu_item_price'];
    $drinks_menu_item_text = $row['drinks_menu_item_text'];
    $drinks_menu_item_num = $row['drinks_menu_item_num'];
    $id = $row['id'];
    
    }
}