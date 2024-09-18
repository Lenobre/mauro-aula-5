<?php

class Product {
    public string $name;
    public string $description;
    public string $price;
    public string $imgURL;

    public function __construct(string $name, string $description, float $price, string $imgURL) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->imgURL = $imgURL;
    }

    public function card(): void {
        echo "
            <div class='card' style='width: 18rem;'>
                <img src='$this->imgURL' class='card-img-top' alt='$this->name'>
                <div class='card-body' style='text-align: center;'>
                    <h5 class='card-title'>$this->name</h5>
                    <p class='card-text'>$this->description</p>
                    <p class='card-text' style='color: #003b78; font-weight: bold;'>R$ $this->price</p>
                    <a href='#' class='btn btn-primary'>Pegar promoção</a>
                </div>
            </div>
        ";
    }
}