<?php

class Product
{

    private $tax = 20;
    private $title;
    private $description;
    private $price;
    private $discount;


    function __construct($title, $description, $price, $discount)
    {
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->discount = $discount;

    }

    public function info()
    {
        return [
            "title" => $this->title,
            "description" => $this->description,
            "price" => $this->priceWithTax($this->price),
            "discount" => $this->discount,
            "discountPrice" => $this->priceWithTax($this->discountPrice()),
        ];
    }

    public function discountPrice()
    {
        return $this->price + ($this->price * ($this->discount / 100));
	}

    public function priceWithTax($price)
    {
        return $price + ($price * ($this->tax / 100));
    }
}