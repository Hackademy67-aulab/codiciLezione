<?php

abstract class ParteAnteriore{
    public abstract function attacco();
}

abstract class PartePosteriore{
    public abstract function difesa();
}

class Missile extends ParteAnteriore{
    public function attacco(){
        echo "Ti perforo ed esplodo abbbomba! \n";
    }

    public function faccioQualcosa(){
        echo "faccio qualcosa \n";
    }
}

class LanciaFiamme extends ParteAnteriore{
    public function attacco(){
        echo "Aho tebbruscio! \n";
    }
}

class Scudo extends PartePosteriore{
    public function difesa(){
        echo "Ahahahahahahaha boing! \n";
    }
}

class Fumogeno extends PartePosteriore{
    public function difesa(){
        echo "Ahahahahahahahahah nun me vedi! \n";
    }
}