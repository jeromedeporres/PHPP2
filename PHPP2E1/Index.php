<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>PHPP2EXO01</title>
</head>
    <body>
        <p><?php
            $age = 17;
            if ($age <= 18)
            {
                echo 'Vous êtes mineur';
            } else {
                echo ' Vous êtes majeure';
            }
            ?></p>
    </body>
</html>