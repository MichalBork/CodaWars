<?php

//
//The rgb function is incomplete. Complete it so that passing in RGB decimal values will result in a hexadecimal representation being returned. Valid decimal values for RGB are 0 - 255. Any values that fall out of that range must be rounded to the closest valid value.
//
//Note: Your answer should always be 6 characters long, the shorthand with 3 will not work here.
//
//The following are examples of expected output values:
//
//rgb(255, 255, 255); // returns FFFFFF
//rgb(255, 255, 300); // returns FFFFFF
//rgb(0, 0, 0); // returns 000000
//rgb(148, 0, 211); // returns 9400D3


function rgb($r,$g,$b){
        $array = [$r,$g,$b];

        foreach ($array as $key => $values){
            if($values < 0 ){
                $values = 0;

            }
            if($values > 255){
                $values = 255;

            }
            if($values < 16){
               $hex = dechex($values);
                $array[$key] = '0'.$hex;
            }else{

            $array[$key] =dechex($values);
            }
        }
var_dump($array);
return strtoupper($array[0].$array[1].$array[2]);
}


var_dump(rgb(255,255,255));