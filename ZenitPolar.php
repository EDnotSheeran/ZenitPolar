<?php

class ZenitPolar {
    public static function encode($text){
//ZENIT
    //Minusculas
        $text = str_replace("z","p",$text);
        $text = str_replace("e","o",$text);
        $text = str_replace("n","l",$text);
        $text = str_replace("i","a",$text);
        $text = str_replace("t","r",$text);
    //Maisculas
        $text = str_replace("Z","P",$text);
        $text = str_replace("E","O",$text);
        $text = str_replace("N","L",$text);
        $text = str_replace("I","A",$text);
        $text = str_replace("T","R",$text);
//Retorno
        return $text;
    }   
}
echo '<p style="color: grey;">PHP:</p>';
echo ZenitPolar::encode("ZenitPolar");