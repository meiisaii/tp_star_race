<?php

//importation de la classe parente
require_once __DIR__ . '/CorpsCeleste.php';

class PlaneteNaine extends CorpsCeleste {
    private $type;

    public function __construct($nom, $masse, $diametre, $demiGrandAxe, $vitesse, $type)
    {
        //appel du constructeur de la classe parente
        parent::__construct($nom, $masse, $diametre, $demiGrandAxe, $vitesse);
        $this->type = $type;
    }

    //fonction pour récupérer le type de planète naine
    public function getType()
    {
        return $this->type;
    }
}