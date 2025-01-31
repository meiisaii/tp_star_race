<?php

//importation des classes nécessaires
require_once __DIR__ . '/Planete.php';
require_once __DIR__ . '/Asteroide.php';
require_once __DIR__ . '/Comete.php';
require_once __DIR__ . '/PlaneteNaine.php';

class Factory
{
    //génération d'un corps céleste aléatoire
    public static function genererCorpsCeleste()
    {
        //choix aléatoire du type de corps céleste
        $types = ['Planete', 'Asteroide', 'Comete', 'PlaneteNaine'];
        $type = $types[array_rand($types)];

        //génération des attributs aléatoires
        $nom = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 8);
        $masse = mt_rand(0.0, 1.0) / 100;
        $diametre = mt_rand(1, 100000);
        $demiGrandAxe = mt_rand(1, 1000);
        $vitesse = mt_rand(10, 100);

        //création du corps céleste en fonction du type
        if ($type === 'Planete') {
            $sousTypes = ['liquide', 'solide', 'gazeux'];
            $sousType = $sousTypes[array_rand($sousTypes)];
            return new Planete($nom, $masse, $diametre, $demiGrandAxe, $vitesse, $sousType);
        } elseif ($type === 'PlaneteNaine') {
            $sousTypes = ['liquide', 'solide', 'gazeux'];
            $sousType = $sousTypes[array_rand($sousTypes)];
            return new PlaneteNaine($nom, $masse, $diametre, $demiGrandAxe, $vitesse, $sousType);
        } elseif ($type === 'Asteroide') {
            return new Asteroide($nom, $masse, $diametre, $demiGrandAxe, $vitesse);
        } elseif ($type === 'Comete') {
            return new Comete($nom, $masse, $diametre, $demiGrandAxe, $vitesse);
        }
    }
}