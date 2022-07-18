<?php
//Write a function to convert a name into initials. This kata strictly takes two words with one space in between them.
//
//The output should be two capital letters with a dot separating them.
//
//It should look like this:
//
//Sam Harris => S.H
//
//patrick feeney => P.F

function abbrevName($name)
{
    $splitedString = explode(' ', $name);
    $splitedName = str_split($splitedString[0]);
    $splitedSurName = str_split($splitedString[1]);


    $name = $splitedName[0] . '.' . $splitedSurName[0];;


    return strtoupper($name);
}