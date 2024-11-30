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
    
require_once "vendor/autoload.php";

$stripe_secret_key = "sk_test_51MtyHaJtFce07bxBsOngqA8fSg9Cvwe1ZuZXEJMM7helLduhNUpHloYluS9G4TIrKNhEQmhBMaRq9kqHam1zvABy00vv12Lxw9";

\Stripe\Stripe::setApiKey($stripe_secret_key);

// configure what customer will see on checkout page:


$line_items = [];

for ($i = 0; $i < count($item_name); $i++) {
    $line_items[] = [
        'price_data' => [
            'currency' => 'usd',
            'product_data' => [
                'name' => $item_name[$i],
            ],
            'unit_amount' => $item_price[$i] * 100, // Stripe expects the price in cents
        ],
        'quantity' => $item_quantity[$i],
        // 'automatic_tax' => ['enabled' => true],
        //'tax_rates' => [$tax_rate_id],  Apply tax rate to this product
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

