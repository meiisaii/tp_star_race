<?php

abstract class CorpsCeleste
{
    //caractéristiques communes à tous les corps célestes
    protected $nom;
    protected $masse;
    protected $diametre;
    protected $demiGrandAxe;
    protected $vitesse;
    protected $nombreTours;

    //constructeur de la classe CorpsCeleste
    public function __construct($nom, $masse, $diametre, $demiGrandAxe, $vitesse)
    {
        $this->nom = $nom;
        $this->masse = $masse;
        $this->diametre = $diametre;
        $this->demiGrandAxe = $demiGrandAxe;
        $this->vitesse = $vitesse;
        $this->nombreTours = 0;
    }

    //fonctions pour récupérer les attributs
    public function getNom()
    {
        return $this->nom;
    }

    public function getMasse()
    {
        return $this->masse;
    }

    public function getDiametre()
    {
        return $this->diametre;
    }

    public function getDemiGrandAxe()
    {
        return $this->demiGrandAxe;
    }

    public function getVitesse()
    {
        return $this->vitesse;
    }

    //fonction pour récupérer le type de corps céleste
    abstract public function getType();

    //fonction pour récupérer le nombre de tours
    public function getNombreTours()
    {
        return $this->nombreTours;
    }

    //fonction pour incrémenter le nombre de tours
    public function setNombreTours($nombreTours)
    {
        $this->nombreTours = $nombreTours;
    }
}