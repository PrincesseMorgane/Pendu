<?php

if($_SERVER['REQUEST_METHOD'] === 'GET'){ //si la method du formulaire est GET,
    include 'getController.php';

} elseif ($_SERVER['REQUEST_METHOD'] === 'POST'){//si la method du formulaire est POST
    include 'postController.php';
}else {
    die('Vous n’avez rien à faire ici'); //pas de method
}
$serializedLettersArray = urlencode(serialize($lettersArray));//retourne le tableau en chaine de caractères qui passera dans l'url