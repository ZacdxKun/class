<?php

class User {
    public $Name;
    public $Birthdate;
    public $Gender;
    public $Money;

    public function __construct($name, $birthdate, $gender, $money) {
        $this->Name = $name;
        $this->Birthdate = $birthdate;
        $this->Gender = $gender;
        $this->Money = $money;
    }

    
    public function sayHello() {
        $ne = $this->Gender == "homme" ? "né" : "née";
        return "Bonjour, je suis " . $this->Name . " et je suis " . $ne . " le " . $this->Birthdate . "<br>" . "il vous reste $this->Money euros ." ;
        echo("<br>");
        echo ("il vous reste $this->Money euros");
    }

    
    public function spendMoney($amount) {
        $this->Money -= $amount;
        if ($this->Money < 0) {
            echo "Vous n'avez plus d'argent, bon courage.";
        }
    }
}

// Test de la classe
$user = new User("Alice", "1990-01-01", "femme", 200);
echo $user->sayHello(); // Affiche le message de salutation
echo("<br>");
$user->spendMoney(100); // Déduit 100 du solde
echo("<br>");
return "Il vous restera $this->Money" ;

$user->spendMoney(60); // Essaye de déduire 60 de plus, devrait afficher le message d'avertissement