
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= GAME_TITLE ?></title> <!--à rendre dynamique -->
</head>
    <body>
        <div>
            <h1>
                <?= GAME_TITLE ?>&nbsp;: trouve le mot en moins de <?= MAX_TRIALS ?> coups
            </h1>
        </div>
        <div>
            <p>
                Le mot à deviner compte <?= $lettersCount; ?> lettres :  <?= $replacementString; ?>
            </p>
        </div>
        <div>
            <img src="images/pendu<?= $trials;?>.gif" srcset="" alt="">
        </div>
        <div>
            <p>
                Voici les lettres que tu as déjà essayées : <?= $triedLetters;?>
            </p>
        </div>
        <div>
            <?php if($gameOver === true){
                include 'partials/failure.php';
            }elseif($gameWon === true) {
                include 'partials/sucess.php';
            }else {
                include 'partials/form.php';
            }?>
        </div>



            <!--Si on joue insérer le formulaire, sinon  a perdu insérer le message de defaite, si on a gagné, insérer message de victoire -->
        </div>
    </body>
</html>
