<?php
require_once('product.php');
require_once('users.php');
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
    private $isOnline = true; // Boolean
    private $products = []; // Array
    private $users = []; // Array

    
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

    public function addUsers(User $userName) {
        $this->users[] = $userName;
    }

    public function getUsers() {
        return $this->users;
    }

    public function insertCreditCard() {
        return $this->creditCardNumber;
    }

    public function buyAProduct(Product $productName, User $userName) {

        // trovo la key via array_search
        $keyProductToRemove = array_search($productName, $this->products);
        // tolgo dall'array via unset
        unset($this->products[$keyProductToRemove]);

        // eccezione per acquisto di prodotti non presenti a catalogo eShop
        if($keyProductToRemove === false) {
            throw new Exception("Il prodotto non è presente in eShop");
        }

        if($userName->isCreditCardExpired === true) {
            throw new Exception("ERRORE: CARTA DI CREDITO SCADUTA");
        }
        

    }

}

// STEP 1 - Creo l'eShop
$eShop = new Eshop ('Apple Store', 'www.apple.it');
echo('Esercizio PHP OOP - eShop<br><br> eShop:<br>');
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
$firstTechProduct->name = 'iPhone 12 Pro Max';
$firstTechProduct->price = 899;
$firstTechProduct->category = 'Smartphone';
$firstTechProduct->model = 'A14 Bionic';
// var_dump($firstTechProduct);
$secondTechProduct = new TechProduct;
$secondTechProduct->name = 'iPhone 12 Mini';
$secondTechProduct->price = 799;
$secondTechProduct->category = 'Smartphone';
$secondTechProduct->model = 'A14 Bionic';
// var_dump($secondTechProduct);
$thirdTechProduct = new TechProduct;
$thirdTechProduct->name = 'MacBook Pro';
$thirdTechProduct->price = 1499;
$thirdTechProduct->category = 'Notebook';
$thirdTechProduct->model = 'M1';
// var_dump($thirdTechProduct);
$fourthTechProduct = new TechProduct;
$fourthTechProduct->name = 'MacBook Air';
$fourthTechProduct->price = 1199;
$fourthTechProduct->category = 'Notebook';
$fourthTechProduct->model = 'M1';
// var_dump($fourthTechProduct);
$fifthTechProduct = new TechProduct;
$fifthTechProduct->name = 'iMac';
$fifthTechProduct->price = 1499;
$fifthTechProduct->category = 'Personal Computer';
$fifthTechProduct->model = 'M1';
// var_dump($fifthTechProduct);
$sixthTechProduct = new TechProduct;
$sixthTechProduct->name = 'iPad Pro';
$sixthTechProduct->price = 669;
$sixthTechProduct->category = 'Tablet';
$sixthTechProduct->model = 'M1';
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

// STEP 3 - Aggiungo i prodotti all'eShop
$eShop->addProduct($firstProduct);
$eShop->addProduct($firstTechProduct);
$eShop->addProduct($secondTechProduct);
$eShop->addProduct($thirdTechProduct);
$eShop->addProduct($fourthTechProduct);
$eShop->addProduct($fifthTechProduct);
$eShop->addProduct($sixthTechProduct);
$eShop->addProduct($firstService);
$eShop->addProduct($secondService);
echo('Prodotti:<br>');
var_dump($eShop->getProducts()); // stampa

// STEP 4 - Creo l'utente standard
$firstUser = new User;
$firstUser->name = 'Tim';
$firstUser->surname = 'Cook';
$firstUser->eMail = 'timcook@apple.com';
$firstUser->telephone = 00333454424;
$firstUser->creditCardNumber;
$eShop->addUsers($firstUser);


// STEP 5 - Creo l'utente premium
$firstPremiumUser = new PremiumUser;
$firstPremiumUser->name = 'Steve';
$firstPremiumUser->surname = 'Jobs';
$firstPremiumUser->eMail = 'hellosteve@apple.com';
$firstPremiumUser->telephone = 00321447622;
$firstPremiumUser->creditCardNumber;
$eShop->addUsers($firstPremiumUser);
echo('<hr><br>Lista Users:<br>');
// var_dump($eShop->getUsers()); // stampa

// STEP 6 - Inserisco la carta di credito per ognuno via "insertCreditCard"
$firstUser->insertCreditCard = 3333234376994638;
$firstPremiumUser->insertCreditCard = 6554879918113826;
var_dump($eShop->getUsers()); // stampa

// STEP 7 - l'utente normale acquista un prodotto 
$eShop->buyAProduct($thirdTechProduct, $firstUser);
echo("<br><hr><br>Lista dei prodotti dopo l'acquisto dell'Utente (Standard) :<br>");
var_dump($eShop->getProducts()); // stampa

// STEP 8 - l'utente premium acquista un prodotto 
// applico lo sconto del 50% all'acquisto del prodotto da parte dell'utente Premium
echo("<br><hr><br>Prodotto con prezzo aggiornato (Acquisto per Utente Premium) :<br>");
$thirdTechProduct->price = ($thirdTechProduct->price)/2;
var_dump($thirdTechProduct);
// l'utente premium esegue l'acquisto
$eShop->buyAProduct($firstTechProduct, $firstPremiumUser);
echo("<br><hr><br>Lista dei prodotti dopo l'acquisto dell'Utente (premium) :<br>");
var_dump($eShop->getProducts()); // stampa

// BONUS - eccezione con carta di credito scaduta
echo("<br><hr><br>Bonus: all'utente standard scade la carta di credito<br>");
$firstUser->isCreditCardExpired = true;
var_dump($firstUser);
echo("<br>L'utente in questione prova ad effettuare un acquisto<br>");
$eShop->buyAProduct($secondTechProduct, $firstUser);
var_dump($eShop->getProducts()); // stampa

