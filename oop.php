<?php

// $docente=[

//     'name'=>'Alek',
//     'surname'=>'Leo',
//     'age'=>'35',
//     'materia'=>'PHP'

// ];


// $studente=[
//     'name'=>'Elmehdi',
//     'surname'=>'Turi',
//     'age'=>'23',
//     'media'=>'9'
// ];

//Classi e oggetti
//Classi = Descrizione di come dovranno essere strutturalmente i nostri oggi che manipoleremo
//Un classe viene identificata da una keywor "class"
//Dopo la keyword segue un nome che deve seguire le seguenti regole:
//- DEVE ESSERE al singolare
//- DEVE INIZIARE con una lettera maiuscola
//- IL NOME DEVE ESSERE in inglese
//- se formato da piú parole(ovvimanete che seguono le regole precedenti) utilizzare il camelcase
class Person{

    //Attributi o proprietá
    protected $name;
    protected $surname;
    protected $age;

    protected static $counter=0;

    //Costruttore
    //Ha un solo compito, quello di inizializzare (quindi dare un valore) agli attributi
    //I parametri formali della funzione construct SONO DIVERSI dagli attributi della classe
    public function __construct($nome, $cognome, $eta)
    {
        //dell'oggetto che andró a creare il valore dell'attributo é uguale 
        //al valore reale del parametro passato alla funzione costruttore
        //la freccetta si intende come un "entra nell'oggetto e prendimi ció che vedi alla tua destra"
        $this->name=$nome;
        $this->surname=$cognome;
        $this->age=$eta;

        //Cara classe di te stessa aumentami il tuo contatore
        //:: = Scope resolution operator
        self::$counter++;
    }


    //Metodi o comportamenti
    public function presentati(){
        //dell'oggetto che ho creato prendimi il name e mostrami il valore, prendimi il surname e 
        //mostrami il valore, prendimi l'age e mostrami il valore
        echo "Ciao sono $this->name $this->surname ed ho $this->age anni! \n";
    }

    //"public", parola chiave static, parola chiave function e nome della funzione
    public static function showCounter(){
        //echo self::$counter;
        $counterValue=self::$counter;
        echo "Le persone create sono $counterValue! \n";
    }

    //Getter e Setter
    public function getName(){
        echo "$this->name";
    }

    // public function setName($newName){
    //     $this->name = $newName;
    // }

}

//Istanziazione di un oggetto
//Alek é un oggetto reale istanza di una classe che lo descrive, la classe Person quindi Alek é una Persona
//la parola new attiva un costruttore specifico della classe alla sua destra
//$alek = new Person('Alek','Leo','35');
// $roberto = new Person('Roberto','Sasso','27');

// $alek->presentati();
// $roberto->presentati();

//Accesso statico ad una variabile statica
//echo Person::$counter;

Person::showCounter();

// var_dump($alek);
// print_r($roberto);

//Attributi e metodi statici
//Gli attributi e metodi statici non lavorano per conto di un oggetto specifico ma per conto di una classe
//Ogni volta che vedremo Class::$attributo  Classe::metodo() stiamo chiamando sicuramente un attributo o un metodo
//statico

//Ereditarietá
class Teacher extends Person{
    //La classe non é vuota ma ha giá al suo interno TUTTO IL CODICE del padre
    public $subject;

    public function __construct($nome, $cognome, $eta, $materia)
    {
        //Chiamo il costruttore del padre che teramite la parola "parent" sappiamo di sicuro che chiamerá
        //il costruttore di Person
        parent::__construct($nome, $cognome, $eta);
        $this->subject=$materia;
    }

    //Avendo chiamato la funzione del figlio con lo stesso nome della funzione del padre
    //la funzione del padre é stata sovrascritta (override)
    public function presentatiDocente(){
        echo "Ciao sono $this->name $this->surname, ho $this->age, e la materia che insegno é $this->subject. \n";
    }

}

$alek= new Teacher('Alek','Leo','35','PHP');

$alek->presentatiDocente();

//print_r($alek);


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

$elmehdi = new Student('Elmehdi','Turi','23','9');

$elmehdi->parametroScemo = "Guarda come ti ho cosato";

print_r($elmehdi);


// $alek->presentatiDocente();
// $elmehdi->presentatiStudente();

//Il figlio vede tutto ció che é presente nel padre
//Il padre non ha minimamente idea di ció che é presente nel figlio
//Due classi sorelle ereditano dallo stesso padre ma non si vedono tra loro

// $personaX = new Person('Pippo','Plutoni','37');

// echo $personaX->name."\n";

// // $personaX->name = "Paperino";

// // echo $personaX->name."\n";
// $personaX->getName();

// // $personaX->setName('Paperino');

// // $personaX->getName();

// print_r($personaX);


// echo Person::showCounter();

//Metodi di accessibilitá
// - public accessibile ovunque nel codice (l'attributo o il metodo) in lettura e scrittura (il costruttore dovrá essere sempre public)
// - protected accessibile dalla classe che ha dichiarato quell'attributo o metodo e dalle classi figlie in lettura e scrittura
// - private accessibile SOLO dalla classe che ha dichiarato quell'attributo o metodo, in lettura e scrittura


//Magic method
//Il metodo __construct fa parte di una serie di metodi definiti magici
//si possono inserire attributi anche senza seguire lo standard o accetta come parametri reali
//un numero di parametri non corrispondenti a quelli effettivamente dichiarati nel costruttore della classe
//senza dare errori
//https://www.php.net/manual/en/language.oop5.magic.php