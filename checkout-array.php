<?php
session_start();
require 'backend/db.php';

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("locaition: index");
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    
    // $fileName = $_FILES["image"]["name"];
    $item_name = $_POST["name"];
    $item_desc = $_POST["desc"];
    $item_quantity = $_POST["quantity"];
    $item_price = $_POST["price"];

//    print_r($item_name);
//    echo "<br>";
//    print_r($item_desc);
//    echo "<br>";
//    print_r($item_price);

//    exit();

    $products = [
        $item_name,
        $item_quantity,
        $item_price
    ];
$associativeNameArray = array_map(function ($value, $key) {
    return ["name" . ($key + 1) => $value];
}, $products, array_keys($products));

$associativeNameArray = array_merge(...$associativeNameArray);
echo "<pre>";
print_r($associativeNameArray);
echo "</pre>";
exit();

// Loop through the associative array
// foreach ($associativeNameArray as $key => $value) {
//     echo $key . "" . $value . "<br>";
// }

// print_r($associativeArray);
// exit();


// $indexedArray = ["apple", "banana", "cherry"];

// $associativeArray = array_map(function ($value, $key) {
//     return ["fruit" . ($key + 1) => $value];
// }, $indexedArray, array_keys($indexedArray));

// $associativeArray = array_merge(...$associativeArray);


    // $sale_name = [];
    // foreach ($item_name as $index => $value) {
    // $sale_name["name" . ($index + 1)] = $value;
    // }

    // $sale_desc = [];
    // foreach ($item_desc as $index => $value) {
    // $sale_desc["description" . ($index + 1)] = $value;
    // }

    // $sale_quantity = [];
    // foreach ($item_quantity as $index => $value) {
    // $sale_quantity["quantity" . ($index + 1)] = $value;
    // }

    // $sale_price = [];
    // foreach ($item_price as $index => $value) {
    // $sale_price["price" . ($index + 1)] = $value;
    // }


    
require_once "vendor/autoload.php";

$stripe_secret_key = "sk_test_51MtyHaJtFce07bxBsOngqA8fSg9Cvwe1ZuZXEJMM7helLduhNUpHloYluS9G4TIrKNhEQmhBMaRq9kqHam1zvABy00vv12Lxw9";

\Stripe\Stripe::setApiKey($stripe_secret_key);

// configure what customer will see on checkout page:

    // Creating a multi-dimensional array using the associative arrays
//     $all_sales = [
//         $sale_name,
//         $sale_desc,
//         $sale_price
// ];



$line_items = [];

   
foreach ($associativeNameArray as $sales) {
    
    $line_items[] = [
        'price_data' => [
            'currency' => 'usd',
            'product_data' => [
                'name' => $item_name,
                'description' => $item_desc,
            ],
            'unit_amount' =>  $item_price * 100,
        ],
        'quantity' => 1,
    ];
}
}


try {
    $checkout_session = \Stripe\Checkout\Session::create([
        'payment_method_types' => ['card'],
        'line_items' => $line_items,
        'mode' => 'payment',
        'success_url' => 'http://localhost/your-restaurant/success.php', // URL after payment success
        'cancel_url' => 'http://localhost/your-restaurant/index.php', // URL if the user cancels
    ]);

    // Redirect to Stripe Checkout
    http_response_code(303);
    header("Location: " . $checkout_session->url);
    exit();
} catch (Exception $e) {
    echo 'Error creating checkout session: ' . $e->getMessage();
}

