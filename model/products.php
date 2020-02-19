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
    public function __construct(string $productsName,int $productsId, string $description, float $price)
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
    public function getPrice() : float
    {
        return $this->price;
    }
}