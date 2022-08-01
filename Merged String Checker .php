<?php
//At a job interview, you are challenged to write an algorithm to check if a given string, s, can be formed from two other strings, part1 and part2.
//
//The restriction is that the characters in part1 and part2 should be in the same order as in s.
//
//The interviewer gives you the following example and tells you to figure out the rest from the given test cases.

//For example:
//
//'codewars' is a merge from 'cdw' and 'oears':
//
//    s:  c o d e w a r s   = codewars
//part1:  c   d   w         = cdw
//part2:    o   e   a r s   = oears

function isMerge($s, $part1, $part2)
{
    $merge = $part1 . $part2;

    $sSplit = str_split($s);
    $mergeSplit = str_split($merge);

    sort($mergeSplit);
    sort($sSplit);

    foreach ($mergeSplit as $key => $values) {
        if ($values !== $sSplit[$key]) {
            return false;
        }
    }

    return true;
}


var_dump(isMerge('codewars', 'cod', 'wars'));