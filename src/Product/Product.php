<?php

namespace App\Product;

class Product implements ProductInterface
{

    private int $tax = 20;
    private string $title;
    private string $description;
    private float|int $price;
    private int $discount;


    function __construct(string $title, string $description, float|int $price, int $discount)
    {
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->discount = $discount;
    }

    public function info(): array
    {
        return [
            "title" => $this->title,
            "description" => $this->description,
            "price" => $this->priceWithTax($this->price),
            "discount" => $this->discount,
            "discountPrice" => $this->priceWithTax($this->discountPrice()),
        ];
    }

    public function show(): void
    {
        echo "<h3>{$this->title}</h3><p>{$this->discountPrice()}</p>";
    }

    private function discountPrice(): string
    {
        return $this->price + ($this->price * ($this->discount / 100));
	}

    private function priceWithTax($price): string
    {
        return $price + ($price * ($this->tax / 100));
    }
}