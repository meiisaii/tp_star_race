<?php

require_once __DIR__ . '/CorpsCeleste.php';

class Comete extends CorpsCeleste
{
    //fonction pour récupérer le type de comète (tout le temps solide)
    public function getType()
    {
        return 'solide';
    }
}