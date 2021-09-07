<?php

/* 
TRACCIA ESERCIZIO
1. creiamo l'eshop
2. creiamo diversi prodotti 
3. aggiungiamoli all'eshop
4. creiamo l'utente normale
5. creiamo l'utente premium 
6. insertCreditCard per ognuno
7. l'utente normale acquista un prodotto 
8. l'utente premium acquista un prodotto con sconto 
*/

class EShop {

    public $name; // String
    public $url; // String
    public $isOnline = true; // Boolean
    public $products = []; // Array
    
    // CONSTRUCT - assegno nome e url all'eShop alla sua costruzione
    public function __construct(string $eshopName, string $webUrl)
    {
        $this->name = $eshopName;
        $this->url = $webUrl;   
    }

    public function addProduct(Product $productName) {
        $this->products[] = $productName;
    }

    public function getProducts() {
        return $this->products;
    }

}
// ------------------------------------ // 
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
// ------------------------------------ // 
class User {

    public $name; // String
    public $surname; // String
    public $eMail; // String
    public $telephone; // Number
    public $discount = 0; // Number
    public $creditCardNumber; // Number
    public $isCreditCardExpired = false; // Boolean

}

class PremiumUser extends User {

    public $discount = 50; // Number
    public $isPremium = true; // Boolean

}

// ------------------------------------ // 



// STEP 1 - Creo l'eShop
$eShop = new Eshop ('Apple Store', 'www.apple.it');
echo('Esercizio PHP OOP - eShop<br><br>');
var_dump($eShop);
echo('<br><hr><br>');

// STEP 2 - Creo diversi prodotti
$firstProduct = new Product;
$firstProduct->name = 'MacBook Pro M1 Cover';
$firstProduct->price = 50;
$firstProduct->category = 'Cover';
$firstProduct->model = 'Leather Case';
// var_dump($firstProduct);
$firstTechProduct = new TechProduct;
$firstTechProduct->name = 'iPhone';
$firstTechProduct->price = 899;
$firstTechProduct->category = 'Smartphone';
$firstTechProduct->model = '12 Pro Max';
// var_dump($firstTechProduct);
$secondTechProduct = new TechProduct;
$secondTechProduct->name = 'iPhone';
$secondTechProduct->price = 799;
$secondTechProduct->category = 'Smartphone';
$secondTechProduct->model = '12 mini';
// var_dump($secondTechProduct);
$thirdTechProduct = new TechProduct;
$thirdTechProduct->name = 'MacBook';
$thirdTechProduct->price = 1499;
$thirdTechProduct->category = 'Notebook';
$thirdTechProduct->model = 'Pro M1';
// var_dump($thirdTechProduct);
$fourthTechProduct = new TechProduct;
$fourthTechProduct->name = 'MacBook';
$fourthTechProduct->price = 1199;
$fourthTechProduct->category = 'Notebook';
$fourthTechProduct->model = 'Air M1';
// var_dump($fourthTechProduct);
$fifthTechProduct = new TechProduct;
$fifthTechProduct->name = 'iMac';
$fifthTechProduct->price = 1499;
$fifthTechProduct->category = 'Personal Computer';
$fifthTechProduct->model = 'M1';
// var_dump($fifthTechProduct);
$sixthTechProduct = new TechProduct;
$sixthTechProduct->name = 'iPad';
$sixthTechProduct->price = 669;
$sixthTechProduct->category = 'Tablet';
$sixthTechProduct->model = 'Air';
// var_dump($sixthTechProduct);
$firstService = new Services;
$firstService->name = 'Apple Music';
$firstService->price = 5;
$firstService->category = 'Services';
$firstService->matter = 'Music';
// var_dump($firstService);
$secondService = new Services;
$secondService->name = 'Apple iCloud';
$secondService->price = 3;
$secondService->category = 'Services';
$secondService->matter = 'Cloud Storage';
// var_dump($secondService);

// Aggiungo i prodotti all'eShop
$eShop->addProduct($firstProduct);
$eShop->addProduct($firstTechProduct);
$eShop->addProduct($secondTechProduct);
$eShop->addProduct($thirdTechProduct);
$eShop->addProduct($fourthTechProduct);
$eShop->addProduct($fifthTechProduct);
$eShop->addProduct($sixthTechProduct);
$eShop->addProduct($firstService);
$eShop->addProduct($secondService);
var_dump($eShop->getProducts()); // stampa