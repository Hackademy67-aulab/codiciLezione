<?php

    //Regole per le variabili
    //DEVE iniziare con il $
    //DEVE iniziare con una lettera o con un _
    //NON PUÓ iniziare con un numero
    //PUÓ contenere caratteri alfanumerici o _
    //NON PUÓ contenere spazi vuoti
    //TUTTE le variabile deveono inisare con la lettera minuscola e se contengono piú parola
    //utilizzare il camelcase

    $name = "Alek"; //il ";" separa quelli che vengono definiti statement o comandi

    //Le costanti si dichiarano partendo dalla keyword const, il nome TUTTO IN MAIUSCOLO e l'assegnazione del valore stesso
    //Le costanti non hanno bisogno del dollaro
    //Le costanti sono locazioni di memoria ma il loro valore non cambia MAI nel tempo
    const NAME = "Pippo";

    // NAME = "";

    //Type juggling
    // $name = "Adriano";
    //$name = 1;

    //Php é case sensitive
    // $Name = "Pippo";

    //echo aapre il cassetto, prende il contenuto e lo stampa sottoforma di stringa
    //non é una funzione ma un costrutto del linguaggio
    //echo $name;

    //Tipi di dato(tipi di dato che possiamo assegnare alle variabili)
    //TIPI DI DATO SEMPLICE
    //string
    $name="Fabio";
    //integer
    $number=3;
    //boolean (valori true o false)
    $is_teacher=true;
    //float (o floating point)
    $fnumber=4.35;
    //TIPI DI DATO SPECIALE
    $null=null;


    //Oggetti -> coming soon

    //Built-in function
    //var_dump entra nel cassetto, prende il contenuto e ci dice a quale tipo dato corrisponde
    // var_dump($name);
    // var_dump($number);
    // var_dump($is_teacher);
    // var_dump($fnumber);
    // var_dump($null);

    //UTILIZZO E MANIPOLAZIONE DELLE STRINGHE
    $value='Lorenzo';

    //concatenare le stringhe in php si usa il "."
    // echo 'Ciao il mio nome e\' '.$value;

    //Variable interpolation
    //interpolazione di variabili, si traduce in conmcatenazione di tipi di dato differenti
    //echo "Ciao il mio nome é $value";

    //UTILIZZO E MANIPOLAZIONE DEI NUMERI
    // $n1 = 3;
    // $n2 = "ciao5";

    // echo $n1 + $n2;

    //TIPI DI DATO COMPOSTO
    //Array

    //ESISTONO DUE MODI PER DICHIARARE GLI ARRAY
    //un array é una lista di elementi ordinata secondo un indici assegnato automaticamente
    //$array=array('A','B','C');
    // $array=['A','B','C'];
    //Gli array sono zero based
    $array = ['A','B','C', 1, 5.8, ['D','E','F']];

    //echo $array[5][1];

    //echo alvora SOLO su tipi di dato semplici
    //echo $array;

    //var_dump($array);
    
    //print_r($array);
    //print_r($name);

    //ARRAY ASSOCIATIVO
    //in un array associativo la chiave deve essere univoca
    $person = [
        'name'=>'Alek',
        'surname'=>'Leo',
        'age'=>'35'
    ];

    //echo $person['name'];
    //print_r($person['name']);

    //Obiettivo stampare promosso se voto maggiore o uguale a 60
    //promosso con lode se maggiore di 100
    //bocciato altrimenti

    $vote = 110;

    // if($vote>100){
    //     echo 'promosso con lode';
    // }elseif($vote >= 60){
    //     echo 'promosso';
    // }else{
    //     echo 'bocciato';
    // }

    // switch($vote){
    //     case $vote > 100:
    //         echo 'Promosso con lode';
    //     break;
    //     case $vote >= 60:
    //         echo 'Promosso';
    //     break;
    //     default:
    //      echo "Bocciato!!!! CIUCCIO!!!";
    //     break;       
    // }

    //obiettivo stampare numeri da uno a 3
    //FOR
    for ($i=0; $i < 4; $i++) { 
      echo "$i \n";
    }
    echo "Ultimo = $i";

    //FOREACH
    $array = ['A','B','C','D','E','F'];

    foreach ($array as $value) {
        echo "$value \n";
    }

    //WHILE
    $i=0;
    while($i<5){
        echo "$i \n";
        $i++;
    }
    echo "Ciao il ciclo é finito andate in pace!";


//DO WHILE
    do{
        $input = readline('Inserisci un input:');
    }while($input != 'n');

?>