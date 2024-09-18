<?php 

session_start();

if (isset($_SESSION["products"])) {
    foreach($_SESSION["products"] as $product) {
        $product = unserialize($product);
        $product->card();
    }
}