<?php
$gameOver = false;
$gameWon = false;
$lettersArray = unserialize(urldecode($_POST['lettersArray'])); //urldecode => decode la chaine en url et remmet les lettres envoyé par le POSTen tant que tableau
$triedLetters = $_POST['triedLetters'];
$triedletter = $_POST['triedletter'];
$trials =  $_POST['trials'];
$remainingTrials = $_POST['trials'];
$triedLetters.=$triedletter;
$triedletter = $_POST['triedletter'];//recupere la lettre qu'on a tenté
$lettersArray[$triedletter] = false;
$wordIndex = $_POST['wordIndex'];
$wordsArray = getWordsArray(); //words.txt
$word = strtolower(getWord($wordIndex, $wordsArray)); //prend un mot aléatoirement
$lettersCount = $_POST['lettersCount'];
$replacementString = $_POST['replacementString'];
$letterFound = false;
for($i = 0; $i<$lettersCount;$i++){
    $letter = substr($word, $i, 1);
    if($triedletter === $letter){
        $letterFound = true;
        $replacementString= substr_replace($replacementString, $triedletter, $i, 1);
    }
}
if($letterFound === false){
    $trials++;
}
$remainingTrials = MAX_TRIALS - $trials;

if($remainingTrials <= 0){
    $gameOver=true;
}elseif($replacementString === $word){
    $gameWon = true;
}