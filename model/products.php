<?php
declare(strict_types=1);


class Products
{
    // Private Product information
    private $productsId;
    private $productsName;
    private $description;
    private $price;

    // constructor (parent)
    public function __construct(int $productsId, string $productsName, string $description, int $price)
    {
        $this->productsId = $productsId;
        $this->productsName = $productsName;
        $this->description = $description;
        $this->price = $price;

        //get
    }
    public function getProductsId() : int
    {
        return $this->productsId;
    }
    public function getProductName() : string
    {
        return $this->productsName;
    }
    public function getDescription() : string
    {
        return $this->description;
    }
    public function getPrice() : int
    {
        return $this->price;
    }
}