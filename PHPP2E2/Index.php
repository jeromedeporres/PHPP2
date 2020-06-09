<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>PHPP2EXO02</title>
</head>
    <body>
        <p><?php
            // Version 1
            $isEasy = true;
            if ($isEasy) {
                echo 'C\'est facile !!';
            }
            else{ echo 'C\'est difficile !!!';
        }
            ?></p>
    </body>
</html>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>PHPP2EXO02</title>
</head>
    <body>
        <p>
            <?php
            // Version 2
            echo $test = $isEasy == false ? 'C\'est facile !!' :  'C\'est difficile !!!';
            ?>
        </p>
    </body>
</html>
