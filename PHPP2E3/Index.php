<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>PHPP2EXO03</title>
</head>
    <body>
        <p><?php
            $age = 25;
            $gender = 'femme';
            if ($age <18 && $age >0 && $gender == 'homme')
            {
                echo 'Vous êtes un homme et vous êtes mineur';
            }elseif ($age >= 18 && $age <125 && $gender == 'homme')
            {
                echo 'Vous êtes un homme et vous êtes majeur';
            }elseif ($age <18  && $age >0 &&  $gender == 'femme')
            {
                echo 'Vous êtes une femme et vous êtes mineure';
            }elseif ($age >= 18 && $age <125 && $gender == 'femme')
            {
                echo 'Vous êtes une femme et vous êtes majeure';
            }else 
            {
                echo 'Votre âge ou votre genre n\'est pas valide';
            }
            ?></p>
    </body>
</html>
