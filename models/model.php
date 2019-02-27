<?php
function getWordsArray()
{
    return file(FILE_PATH, FILE_IGNORE_NEW_LINES); //récupère words.txt
}

function getRandomIndex($wordsArray)
{
    return rand(0,count($wordsArray)-1); //retourne un nbr aléatoire entre 0 et le nbr total de lettre du mot
}

function getWord($index, $wordsArray)
{
    return $wordsArray[$index];
}
function getReplacementString($lettersCount){

    return str_repeat(REPLACEMENT_CHAR,$lettersCount);

}