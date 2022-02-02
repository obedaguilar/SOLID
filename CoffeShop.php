<?php

namespace PRUEBASPHP;
class  CoffeShop
{
    protected $products = [];


    public function addProducts(Array $product)
    {
        $this->products = $product;
    }
    public function getProducts()
    {
        return $this->products;
    }
    public function removeProduct($id)
    {
        //logica para borrar el producto
    }
}
