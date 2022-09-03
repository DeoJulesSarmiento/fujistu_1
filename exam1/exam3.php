<?php 
class Palindrome{
    public static function checkPalindrome($word){
        $word = strtolower($word);
        if($word ==  strrev($word)){
            echo "True";
        }
        else{
            echo "False";
        }
    }
}
echo Palindrome::checkPalindrome('Deleveled');
