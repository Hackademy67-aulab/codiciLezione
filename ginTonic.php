<?php

abstract class Gin{
    public abstract function inseriscoGin();
}

abstract class Tonic{
    public abstract function inseriscoTonic();
}

class Gordon extends Gin{
    public function inseriscoGin()
    {
        echo "Madooooooooooooooo che schifo di gin! \n";
    }
}

class Mare extends Gin{
    public function inseriscoGin()
    {
        echo "Mhoooooooooooooooooooooo che buooono! \n";
    }
}

class Schweppes extends Tonic{
    public function inseriscoTonic()
    {
        echo "Sembra buono ma non é serve a prenderti per ......! \n";
    }
}

class Mediterranea extends Tonic{
    public function inseriscoTonic()
    {
        echo "Sfrizzetta bene sta tonica! \n";
    }
}

class GinTonic{
    public $gin;
    public $tonic;

    public function __construct(Gin $gin,Tonic $tonic){
        $this->gin=$gin;
        $this->tonic=$tonic;
    }

    public function showGinTonic(){
        $this->gin->inseriscoGin();
        $this->tonic->inseriscoTonic();
    }

}


$ginTonic1 = new GinTonic(new Mare, new Schweppes);
$ginTonic1->showGinTonic();

