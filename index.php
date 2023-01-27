<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EXERCICE 1 Longueur De La Ficelle</h1>
            <?php
            $longueur = 'ATOS ACADEMY DIGITAL';
            ?>

        <h3 style="color:orange; font-size:25px;">
            <?php echo "le nombre de caractère est".' '. strlen($longueur); ?>
        </h3>
<hr>
<h1>EXERCICE 2 Compter Les Mots De La Chaîne</h1>
        <?php
            $compter_mot='ATOS ACADEMY DIGITAL.';
        ?>

        <h3 style="color:blue; font-size:25px;">
            <?php echo "le nombre de mot est".' '.str_word_count($compter_mot); ?>
        </h3>
<hr>
<h1>EXERCICE 3 Convertir En Majuscule</h1>
        <?php
        $transf_majuscule = 'atos academy digital.';
        ?>

    <h3 style="color:red; font-size:25px;">
            <?php echo "la phrase atos academy digital a été transformer en majuscule ".' '.strtoupper($transf_majuscule); ?>
    </h3>
</body>
</html>

