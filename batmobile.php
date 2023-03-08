<?php

//Potreste vedere anche la keyword require
//La differenza é che include se non esiste il file incluso va avanti senza errori
//require se non esiste il file richiesto va in errore

include 'batmobileParts.php';

class MacchinaBatman{
    public $attacco;
    public $difesa;

    //Dependency injection
    //la funzione accetterá in ingresso SOLO oggetti figli delle classi astratte ParteAnteriroe e PartePosteriore
    public function __construct(ParteAnteriore $parteAnteriore,PartePosteriore $partePosteriore)
    {
        $this->attacco=$parteAnteriore;
        $this->difesa=$partePosteriore;
    }

    //Tastino attacco
    public function attacco(){
        //fluent interface
        $this->attacco->attacco();
    }

    //Tastino difesa
    public function difesa(){
        //fluent interface
        $this->difesa->difesa();
    }

}

//Se le classi da istanziare non hanno un costruttore posso omettere le parentesi tonde dopo il nome
// $missile = new Missile;
// $scudo = new Scudo;

// $batMobile1 = new MacchinaBatman($missile, $scudo);

//Object composition
//Sto componendo l'oggetto baMobile1 a partire da altri due oggetti uno di tipo Missile, l'altro di tipo Scudo
$batMobile1 = new MacchinaBatman(new Missile, new Scudo);
$batMobile1->attacco();
$batMobile1->difesa();


$batMobile2 = new MacchinaBatman(new LanciaFiamme, new Fumogeno);

$batMobile2->attacco();
$batMobile2->difesa();

// var_dump($batMobile1);
// print_r($batMobile1);