<?php

require_once __DIR__ . '/CorpsCeleste.php';

class Planete extends CorpsCeleste
{
    private $type;

    public function __construct($nom, $masse, $diametre, $demiGrandAxe, $vitesse, $type)
    {
        //appel de la classe parente
        parent::__construct($nom, $masse, $diametre, $demiGrandAxe, $vitesse);
        $this->type = $type;
    }

    //fonction pour récupérer le type de planète
    public function getType()
    {
        return $this->type;
    }
}