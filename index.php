<?php
function isFirstLetterUpperCase($str)
{
    $regexp = '/^[A-Z]/';
    if (preg_match($regexp, $str)) {
        echo("string's first character is uppercase");
    } else {
        echo("string's first character is not uppercase");
    }
}
isFirstLetterUpperCase('Codegym');
echo "<br/>";
isFirstLetterUpperCase('cdegym');
echo "<br/>";

$string1 = "Nguyen van Nam";
echo "String 1: ".$string1." has ";
isFirstLetterUpperCase($string1);
echo "<br/>";

$string2 = "NGUYEN VAN NAM";
echo "String 2: ".$string2." has ";
isFirstLetterUpperCase($string2);
echo "<br/>";

$string3 = "nguyen van Nam";
echo "String 3: ".$string3." has ";
isFirstLetterUpperCase($string3);
echo "<br/>";
