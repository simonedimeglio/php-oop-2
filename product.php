<?php
class Product {

    public $name; // String
    public $price; // Number
    public $category; // String
    public $isAvailable = true; // Boolean

}

class TechProduct extends Product {

    public $haveCharger = false; // Boolean
    public $haveHeadphones = false; // Boolean
    public $isNew = true; // Boolean
    public $isRefurbished = false; // Boolean
    public $model; // String

}

class Services extends Product {

    public $matter; 

}