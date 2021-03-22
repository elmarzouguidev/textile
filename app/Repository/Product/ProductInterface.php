<?php

namespace App\Repository\Product;

interface ProductInterface
{


    public function activeItems();
    
    public function all();

    public function query();

    public function showInNav();
    
    public function getProduct($product);

    public function model();

    public function randomsHome();
}
