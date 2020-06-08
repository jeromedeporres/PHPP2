<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>PHPP2EXO03</title>
</head>
    <body>
        <p><?php
            $age = 15;
            $gender = 'femme';
            if ($age <= 18 && $gender == 'homme')
            {
                echo 'Vous êtes un homme et vous êtes mineur';
            }elseif ($age >= 18 && $gender == 'homme')
            {
                echo 'Vous êtes un homme et vous êtes majeur';
            }if ($age <= 18 &&  $gender == 'femme')
            {
                echo 'Vous êtes une femme et vous êtes mineur';
            }elseif ($age >= 18 && $gender == 'femme')
            {
                echo 'Vous êtes une femme et vous êtes majeure';
            }
            ?></p>
    </body>
</html>