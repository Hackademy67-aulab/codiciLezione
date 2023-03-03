<?php

//CONTROLLO DELLA PASSWORD (PROBLEMONE)
// - MINIMO OTTO CARATTERI DI LUNGHEZZA
// - ALMENO UNA LETTERA MAIUSCOLA
// - ALMENO UN NUMERO
// - ALMENO UN CARATTERE SPECIALE

//EXCRACT - INCAPSULATE - ABSTRACT

// $pwd = readline('Inserisci una password:' );
//echo $pwd;

//MINIMO OTTO CARATTERI
//strlen(string $string): int

function checkLength($password){
    if(strlen($password) >= 8){
        return true;
    }else{
        return false;
    }
}


//ALMENO UNA LETTERA MAIUSCOLA
//echo $pwd[6];

//ciaociao zero based lunghezza 7
//ciaociao user friendly 8

//echo strlen($pwd);

//ctype_upper(mixed $text): bool

function checkUpper($password){
    for ($i=0; $i < strlen($password); $i++) { 
        if(ctype_upper($password[$i])){
            return true;
        }
    }
    //return di default
    return false;
}


// - ALMENO UN NUMERO
//is_numeric(mixed $value): bool

function checkNumber($password){
    for ($i=0; $i < strlen($password); $i++) { 
        if(is_numeric($password[$i])){
            return true;      
        }
    }
    return false;
}




// - ALMENO UN CARATTERE SPECIALE
//in_array(mixed $needle, array $haystack, bool $strict = false): bool

//Creo un array di caratteri speciali

function checkSpecial($password){
    $special_chars=['!','@','#','$'];

    for ($i=0; $i < strlen($password); $i++) { 
        if(in_array($password[$i], $special_chars)){
            return true;
        }
    }
    return false;
}

function checkPassword($passwordToCheck){

    $firstRule = checkLength($passwordToCheck);
    $secondRule = checkUpper($passwordToCheck);
    $thirdRule = checkNumber($passwordToCheck);
    $fourthRule = checkSpecial($passwordToCheck);

    if($firstRule && $secondRule && $thirdRule && $fourthRule){
        return true;
    }else{
        return false;
    }

}

//---------------------------------------------------------------------------------------------------//

$pwd = readline('Inserisci una password:' );
if(checkPassword($pwd)){
    echo "Password corretta!";
}else{
    echo "Password errata!";
}


//----------------------------------------------------------------------------------------------------//
//////////////////////////////////////////////////////////////////////
// $pwd = readline("Inserisci una password: ");
// //REFACTORING STRETTO STRETTO
// function checkPassword($password){
//     $arrayChars=['!','@','#','$'];//Pagliaio

//     $firstRule=checkLength($password);
//     $secondRule=checkUpper($password);
//     $thirdRule=checkNumber($password);
//     $fourthRule=checkSpecial($password, $arrayChars);

// 	return $firstRule && $secondRule && $thirdRule && $fourthRule;
//     //return checkLength($password) && checkUpper($password) && checkNumber($password) && checkSpecial($password,$arrayChars);
// }

// if(checkPassword($pwd)){
// 	echo "Password accettata\n";
// }else{
// 	echo "Password rifiutata per favore inserire almeno otto caratteri, almeno un numero, almeno un carattere speciale ed almeno una maiuscola\n";
// }
////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////
//MILLE TENTATIVI COL DO-WHILE
// do{
//     $pwd = readline("Inserisci una password: ");
// }while(!checkPassword($pwd));
///////////////////////////////////////////////////////////////////

// $pwd = readline("Inserisci una password: ");
// while(!checkPassword($pwd)){
//     $pwd = readline("Inserisci una password: ");
// }

//////////////////////////////////////////////////////////////////
//3 TENTATIVI CON IL FOR
// $errorMessage = true;

// for ($i=0;$i < 3;$i++){ 
//     $pwd = readline("Inserisci una password: ");
//     if(checkPassword($pwd)){
//         $errorMessage = false;
//         break;
//     }
// }

// if($errorMessage){
//     echo "Tentativi esauriti, e pure noi!";
// }
////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////
//3 TENTATIVI CON IL WHILE
// $errorMessage = true;

// $i=0;
// while($i<3){
//     $pwd = readline("Inserisci una password: ");
//     if(checkPassword($pwd)){
//         $errorMessage = false;
//         break;
//     }
//     $i++;
// }

// if($errorMessage){
//     echo "Tentativi esauriti, e pure noi!";
// }
/////////////////////////////////////////////////////////////////////

