<?php
function isValidIP(string $str): bool

{

    $checkNumeric = str_split($str);
    foreach ($checkNumeric as $key => $value) {
        if (!is_numeric($value[$key])) {
            return false;
        }

        $ipAddress = array_map('intval', explode('.', $str));
        // TODO
        var_dump($ipAddress);
        if (array_key_exists(4, $ipAddress)) {
            return false;
        }
        if (count($ipAddress) < 3) {
            return false;
        }
        foreach($ipAddress as $key => $value){
            if($value > 255 ){
                return false;
            }
            if($value < 0 ){
                return false;
            }
        }
        return true;


    }
}