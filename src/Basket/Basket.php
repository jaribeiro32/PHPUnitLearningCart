<?php

namespace LojaVirtual\Basket;

use Symfony\Component\HttpFoundation\Session\Session;
use LojaVirtual\Products\Product;

class Basket
{
    protected $session;
    
    protected $products = [];
    
    public function __construct(Session $session) 
    {
        $this->session = $session;
    }
    
    public function add(Product $product)
    {
        $this->products[] = $product;
    }
    
    public function getProducts()
    {
        return $this->products;
    }
    
    public function save()
    {
        $this->session->start();
        $this->session->set('productsList', $this->products);
    }
    
    public function getSaved()
    {
        $this->session->start();
        $list = $this->session->all();
        
        return $list['productsList'];
    }
    
    public function getTotal()
    {
        // Implementar total
    }
}