<?php
session_start();
require 'backend/db.php';

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("locaition: index");
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    
    // $fileName = $_FILES["image"]["name"];
    $item_name = $_POST["name"];
    // $item_desc = $_POST["desc"];
    $item_quantity = $_POST["quantity"];
    $item_price = $_POST["price"];

    



    // $checkout_items = array();

    // foreach($item_price as $price) {
    //     $checkout_items[$price] = rand(1, 10);
    // }

    // print_r($checkout_items);

   
    $the_price = $item_price * 100;
    $the_quantity = $item_quantity * 1;
    $the_item = $item_name;

        // print_r($items_array);
    // $quantities = $item_quantity * 1;
    // $quantities = $item_price * 100;

    // $items = $item_name;

    // foreach ($item_name as $items) {
    //     echo $items . "<br>";
    //   }
    // foreach ($item_quantity as $quantities) {
    //     echo $quantities * 1  . "<br>";
    //   }

    // foreach ($item_price as $prices) {
    //     echo $prices * 100  . "<br>";
    //   }

    // $quantity = $item_quantity;
    // $price = $item_price;

    // print_r($item_name);
    // echo "<br />";
    // print_r($item_desc);
    // echo "<br />";
    // print_r($item_quantity);
    // echo "<br />";
    // print_r($item_price);
    // exit();
require_once "vendor/autoload.php";

$stripe_secret_key = "sk_test_51MtyHaJtFce07bxBsOngqA8fSg9Cvwe1ZuZXEJMM7helLduhNUpHloYluS9G4TIrKNhEQmhBMaRq9kqHam1zvABy00vv12Lxw9";

\Stripe\Stripe::setApiKey($stripe_secret_key);

// configure what customer will see on checkout page:



$checkout_session = \Stripe\Checkout\Session::create([
    // for one-time payment
    "mode" => "payment",
    "success_url" => "http://localhost/your-restaurant/success.php",
    "cancel_url" => "http://localhost/your-restaurant/index.php",
    "line_items" => [
        [
        "quantity" => $the_quantity,
        "price_data" => [
            "currency" => "usd",
            "unit_amount" => $the_price,
            "product_data" => [
                "name" => $the_item
            ]
            ]
        ]
    ]
]);

http_response_code(303);
header("Location: " . $checkout_session->url);

    }
