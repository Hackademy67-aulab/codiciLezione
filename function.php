<?php
//Dichiarazione di una funzione
//- keyword function
//- nome della funzione
//- cancello di entrata della funzione ()
//- copro della funzione {}
//quando vogliamo far entrare qualcosa all'interno della nostra funzione iniamo a considerare
//l'utilizzo dei parametri formali (i parametri formali sono dei segnaposto)
function sayHello($param){
    echo "Ciao sono $param e questa é la mia prima funzione! \n";
}

//Invocazione della funzione o anche chiamata di funzione
//Quello che inseriamo all'interno delle parentesi tonde quando invochiamo una funzione
//sono i PARAMETRI REALI
// sayHello('Alek');
// sayHello('Khadija');
// sayHello('Gianluca');
// sayHello('Leonardo');

//SCOPE (differenza fondamentale fra javascript e php)
$num=10;

//Il parametro formale ha un nome che utilizzeremo all'interno della funzione
function stamp($n){
    echo $n;
}

//stamp($num);

//la funzione ha uno scope locale, tutto quello che e' all'esterno della funzione
//non viene visto all'interno a meno che non lo faccio entrare. Stessa cosa vale per l'inverso
//tutto quello che e' dichiarato all'interno della funziohne non viene visto dall'esterno a meno che
//non lo faccio uscire

//Le varibili hanno scope locale
$num1 = 10;
$num2 = 5;

function sum($x, $y){
    echo $x + $y;
}

//sum($num1, $num2);

//LE COSTANTI HANNO SCOPE GLOBALE
const NUM1 = 10;
const NUM2 = 5;

function sumConst(){
    echo NUM1 + NUM2;
}

//sumConst();

//POSIZIONALITA' DEI PARAMETRI

function getUser($name,$surname,$age){
    echo "i tuoi dati sono Nome:$name, Cognome:$surname, Etá:$age";
}

//getUser('Tribuzio','Giuseppe', '21');

//PASSAGGIO PER VALORE E PER RIFERIMENTO
// $num=5;

// function increment($x){
//     $x = $x+1;
//     echo $x;
// }

// echo $num;//5
// echo "\n";
// increment($num);//passaggio per riferimento
// echo "\n";
// echo $num;//5

//PASSAGGIO PER VALORE
$num=5;

function increment(&$x){
    $x = $x+1;
    echo $x;
}

// echo $num;//5
// echo "\n";
// increment($num);//passaggio per riferimento
// echo "\n";
// echo $num;//5

//RETURN
//Il retur e' caratteristica intrinseca delle funzioni
//non tutte le funzioni per hanno un return, dipende da cio' che vogliamo che facciano
//il return significa "torna indietro dalla funzione con qualcosa o nulla"
//se il return non e' presente stiamo dicendo alla fuznione fai qualcosa e fermati

// $num1 = 10;
// $num2 = 5;

// function sumReturn($x, $y){
//     return $x + $y;
// }

// $somma = sumReturn($num1,$num2);
// echo $somma;

//PARAMETRO DI DEFAULT
// $num1 = 10;
// $num2 = 5;

// function sumReturn($x=10, $y=30){
//     return $x + $y;
// }

// $somma = sumReturn($num1, $num2);
// echo $somma;

//SPLAT OPERATOR
$num1 = 10;
$num2 = 5;

function sumSplat(...$numbers){
    //print_r($numbers);
    $sum=0;
    foreach ($numbers as $number) {
        $sum += $number;
    }

    return $sum;
}

sumSplat(2,5,6,18,90,11,34,67);
//echo $sumSplat;