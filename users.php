<?php

class User {

    public $name; // String
    public $surname; // String
    public $eMail; // String
    public $telephone; // Number
    public $discount = 0; // Number
    public $creditCardNumber; // Number
    public $isCreditCardExpired = false; // Boolean
    public $isPremium = false; // Boolean
}

class PremiumUser extends User {

    public $discount = 50; // Number
    public $isPremium = true; // Boolean

}