<?php
class Palindrome
{
    public static function isPalindrome($word)
    {
        $word = strtolower($word);
        $reverse = strrev($word);
        if($reverse == $word)
        {
            return true;
        }
        else {
            return false;
        }
    }
}

echo Palindrome::isPalindrome('Deleveled');
