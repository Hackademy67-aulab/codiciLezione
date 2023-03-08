<?php

//Una classe astratta viene caratterizzata dalla keyword "abstract"
abstract class Person{

    protected $name;
    protected $surname;
    protected $age;

    use Jetpack;

    //il costruttore rimarrá sempre una funzione pubblica e concreta
    public function __construct($nome, $cognome, $eta)
    {

        $this->name=$nome;
        $this->surname=$cognome;
        $this->age=$eta;

    }


    //Una classe astratta puó contenere sia metodi concreti che metodi astratti
    //I metodi concreti sono caratteraterizzati dall'implementazione del codice al loro interno
    // public function presentati(){
    //     echo "Ciao sono $this->name $this->surname ed ho $this->age anni! \n";
    // }

    //I metodi astratti non hanno codice implementato, non esistono parentesi graffe con codice all'interno
    //TUTTE LE PERSONE SANNO E POSSONO PRESENTARSI, IL COME VERRÁ SPECIFICATO NELLE CLASSI CONCRETE
    public abstract function presentati(); //Firma del metodo

    // public function fuffa(){
    //     echo "Ciao sono un metodo fuffa ma servo per spiegarti il concetto";
    // }

}

//Le classi astratte NON POSSONO essere istanziate
// $alek = new Person('Alek','Leo','35');
// $alek->presentati();


class Teacher extends Person{

    public $subject;

    public function __construct($nome, $cognome, $eta, $materia)
    {

        parent::__construct($nome, $cognome, $eta);
        $this->subject=$materia;
    }

    public function presentati(){
        echo "Ciao sono $this->name $this->surname, ho $this->age anni, e la materia che insegno é $this->subject. \n";
    }

}

$alek = new Teacher('Alek','Leo','35','PHP');
$alek->presentati();
$alek->vola();


class Student extends Person{
    public $average;

    public function __construct($name, $surname, $age, $average)
    {
        parent::__construct($name,$surname,$age);
        $this->average=$average;
    }

    public function presentati(){
        echo "Ciao sono $this->name $this->surname, ho $this->age anni e la mia media ad Aulab é $this->average! \n";
    }
}

//Una classe concreta estende una classe o astratta o concreta
//una classe astratta NON PUÓ estendere un'altra classe astratta

//Un trait é un tratto di codice che posso riutilizzare indistintamente all'interno delle mie logiche(codice)
trait Jetpack{

    public function vola(){
        echo "Sto volando";
    }

}