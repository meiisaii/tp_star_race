<?php

require_once __DIR__ . '/CorpsCeleste.php';

class Asteroide extends CorpsCeleste
{
    //fonction pour récupérer le type d'astéroïde (tout le temps solide)
    public function getType()
    {
        return 'solide';
    }
}