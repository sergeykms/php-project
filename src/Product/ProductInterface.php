<?php

namespace App\Product;

interface ProductInterface
{
    public function info(): array;
    public function show(): void;

}