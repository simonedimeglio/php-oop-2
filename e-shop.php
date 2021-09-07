<?php

class EShop {

    // Mettiamo una lista di prodotti

}
// ________________________-
class Product {
    public $prezzo;
}

class TechProduct extends Product {

}

class Services extends Product {
    
}
// ________________________-
class User {

    public $sconto = 0;

}

class PremiumUser {
    // qui dentro potrebbe avere la definizione di una proprietà
    // riguardante una percentuale di sconto per ogni prodotto

    public $sconto = 50;
}


// ________________________

/*
1. creiamo l'eshop
2. creiamo diversi prodotti 
3. aggiungiamoli all'eshop
4. creiamo l'utente normale
5. creiamo l'utente premium 
6. insertCreditCard per ognuno
7. l'utente normale acquista un prodotto 
8. l'utente premium acquista un prodotto con sconto 

l'acquisto non è una classe, può esssere una cosa procedurale.




*/