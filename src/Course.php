<?php

require_once __DIR__ . '/Factory.php';

class Course
{
    //liste des participants
    private $participants = [];
    private $dureeCourse;


    public function initialiserCourse()
    {
        //ajout de 10 participants avec le factory
        for ($i = 0; $i < 10; $i++) {
            $this->participants[] = Factory::genererCorpsCeleste();
        }
        //durée de la course aléatoire
        $this->dureeCourse = mt_rand(1, 100);
    }

    public function afficherGrilleDepart()
    {
        //triage des participants
        usort($this->participants, function ($a, $b) {
            return $a->getDemiGrandAxe() <=> $b->getDemiGrandAxe();
        });

        //affichage des participants
        foreach ($this->participants as $index => $participant) {
            $position = $index + 1;
            echo "le $position participant ({$participant->getNom()}) est un/une " . get_class($participant) . " de type {$participant->getType()} <br>";
        }
    }

    public function demarrerCourse()
    {
        //calcul du nombre de tours effectués par chaque participant
        foreach ($this->participants as $participant) {
            $nombreTours = $this->calculerNombreTours($participant);
            $participant->setNombreTours($nombreTours);
        }
    }

    private function calculerNombreTours($participant)
    {
        //calcul de la taille de l'orbite
        $circonference = 2 * pi() * $participant->getDemiGrandAxe();
        $distanceParcourue = $participant->getVitesse() * $this->dureeCourse * 8760; // 8760 heures dans une année
        return $distanceParcourue / $circonference;
    }

    public function afficherResultats()
    {
        //triage des participants selon le nombre de tours
        usort($this->participants, function ($a, $b) {
            return $b->getNombreTours() <=> $a->getNombreTours();
        });

        //affichage du podium
        echo "le vainqueur de la course est un/une " . get_class($this->participants[0]) . " de type {$this->participants[0]->getType()}, le grand {$this->participants[0]->getNom()}, il a effectué {$this->participants[0]->nombreTours} tours <br>";
        echo "le lauréat de la médaille d'argent est un/une " . get_class($this->participants[1]) . " de type {$this->participants[1]->getType()}, le non moins talentueux {$this->participants[1]->getNom()}, il a effectué {$this->participants[1]->nombreTours} tours <br>";
        echo "le troisième candidat présent sur le podium est un/une " . get_class($this->participants[2]) . " de type {$this->participants[2]->getType()}, le vénérable {$this->participants[2]->getNom()}, il a effectué {$this->participants[2]->nombreTours} tours <br>";
    }

    //fonction pour récupérer les participants
    public function getParticipants()
    {
        return $this->participants;
    }
}