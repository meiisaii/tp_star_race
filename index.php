<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Star Race</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="course-container">
        <?php

        //importation des fichiers nécessaires
        require_once __DIR__ . '/src/Factory.php';
        require_once __DIR__ . '/src/Course.php';
        require_once __DIR__ . '/src/GrilleDepartDecorator.php';
        require_once __DIR__ . '/src/ResultatsCourseDecorator.php';

        //initialisation de la course
        $course = new Course();
        $course->initialiserCourse();

        //affichage de la grille de dépoart
        $grilleDepart = new GrilleDepartDecorator($course);
        $grilleDepart->afficher();

        //démarrage de la course
        $course->demarrerCourse();

        //affichage du podium
        $resultatsCourse = new ResultatsCourseDecorator($course);
        $resultatsCourse->afficher();
        ?>
    </div>
</body>
</html>