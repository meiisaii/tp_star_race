<?php
class ResultatsCourseDecorator
{
    private $course;

    public function __construct(Course $course)
    {
        $this->course = $course;
    }

    // Fonction pour afficher les résultats de la course
    public function afficher()
    {
        //récupération des participants de la course
        $participants = $this->course->getParticipants();

        //Triage des participants
        usort($participants, function ($a, $b) {
            return $b->getNombreTours() <=> $a->getNombreTours();
        });

        //affichage du podium
        echo "<h2>Podium de la course</h2>";
        echo "- Le vainqueur de la course est un/une " . get_class($participants[0]) . " de type {$participants[0]->getType()}, le grand {$participants[0]->getNom()}, il a effectué {$participants[0]->getNombreTours()} tours <br>";
        echo "- Le lauréat de la médaille d'argent est un/une " . get_class($participants[1]) . " de type {$participants[1]->getType()}, le non moins talentueux {$participants[1]->getNom()}, il a effectué {$participants[1]->getNombreTours()} tours <br>";
        echo "- Le troisième candidat présent sur le podium est un/une " . get_class($participants[2]) . " de type {$participants[2]->getType()}, le vénérable {$participants[2]->getNom()}, il a effectué {$participants[2]->getNombreTours()} tours <br>";
    }
}