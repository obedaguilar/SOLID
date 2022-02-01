<?php

namespace App;

class  CoffeShop
{
    protected $products = [];


    public function addProducts($product = [])
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
    public function addtoCart($id, $quantity)
    {
        //logica
    }
    public function getTotal()
    {
        //logica para generar el total a apagar el carrito
    }
    public function viewMenu()
    {
        $menu = '';
    }
}
