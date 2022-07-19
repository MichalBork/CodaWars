<?php
//Write an algorithm that will identify valid IPv4 addresses in dot-decimal format. IPs should be considered valid if they consist of four octets, with values between 0 and 255, inclusive.
//
//Valid inputs examples:
//Examples of valid inputs:
//1.2.3.4
//123.45.67.89
//Invalid input examples:
//1.2.3
//1.2.3.4.5
//123.456.78.90
//123.045.067.089
//Notes:
//Leading zeros (e.g. 01.02.03.04) are considered invalid
//Inputs are guaranteed to be a single string
function isValidIP(string $str): bool
{
    $a = preg_match("/[^0-9\.]/", $str);
    if ($a > 0) {
        return false;
    }


    $ipAddress = array_map('intval', explode('.', $str));
    // TODO
    var_dump($ipAddress);
    if (array_key_exists(4, $ipAddress)) {
        return false;
    }
    if (count($ipAddress) !== 4) {
        return false;
    }
    foreach ($ipAddress as $key => $value) {
        if ($value > 255 || $value < 0) {
            return false;
        }
    }
    return true;
}


print_r(var_dump(isvalidIP('238.46.26.262')));


