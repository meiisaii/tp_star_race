<?php

class GrilleDepartDecorator
{
    private $course;

    public function __construct(Course $course)
    {
        $this->course = $course;
    }

    // Fonction d'affichage des participants
    public function afficher()
    {
        //récupération des participants
        $participants = $this->course->getParticipants();

        //Triage des participants
        usort($participants, function ($a, $b) {
            if ($a->getDemiGrandAxe() === $b->getDemiGrandAxe()) {
                if ($a->getVitesse() === $b->getVitesse()) {
                    return strcmp($a->getNom(), $b->getNom());
                }
                return $b->getVitesse() <=> $a->getVitesse();
            }
            return $a->getDemiGrandAxe() <=> $b->getDemiGrandAxe();
        });

        //Affichage des participants
        echo "<h2>Grille des participants</h2>";
        foreach ($participants as $index => $participant) {
            $position = $index + 1;
            echo "- Le $position participant, {$participant->getNom()}, est un/une " . get_class($participant) . " de type {$participant->getType()} <br>";
        }
    }
}