<?php

declare(strict_types=1);

namespace Yl\Market\Model;

class Product
{
    public int $id;
    public string $name;
    public float $price;
    public string $description;
    public string $image;
    public string $categorie;
}