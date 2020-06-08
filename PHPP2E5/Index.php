<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>PHPP2EXO05</title>
</head>
    <body>
        <p><?php
        $gender = 'femme';
        if ($gender != 'homme') 
        {
            echo 'C\'est un développeur !!!';
        }
        else
        {
            echo 'C\'est une développeuse !!!';
        }
        ?></p>
    </body>
</html>