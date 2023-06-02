<?php
//Cau 1
    $str = 'Hello World!';
    function countTheNumberOfCharacters($str){
        global $str;
        return strlen($str).'</br>';
    }
    echo countTheNumberOfCharacters($str);
//Cau 2
    $str2 = 'This is numbers';
    function countTheNumberOfWords($str2){
        //$str2 = 'This is numbers: 1 2 3 456'
        return str_word_count($str2).'</br>';
    }
    echo countTheNumberOfWords($str2);
//Cau 3
    function reverseString($str2){
        print strrev($str2).'</br>';
    }
    echo reverseString($str2);
//Cau 4 
    function subStringSearch($str2){
        return strpos($str2, 'h').'</br>';
    }
    echo subStringSearch($str2);
//Cau 5
    function replaceString($str2){
       return str_replace($str2, 'numbers', 'characters').'</br>'; 
    }
    echo replaceString($str2);
//Cau 6
        $sub = 'World';
    function check($str, $sub){

        if (strlen(strstr($str, $sub)) > 0) 
           {
               echo '1'.'</br>';
           }
        else {
               echo '0'.'</br>';
             }
    }
    echo check($str, $sub);
     //Cau 7

$str1 = 'hello world'; 

function change($str1)
    {

        return strtoupper($str1).'</br>';
    }
echo change($str1);
//Cau 8
function lowerCase($str1)
    {

        return strtolower($str1).'</br>';
    }
echo lowerCase($str1);
//Cau 9
function changeInitial($str1)
    {

        return ucwords($str1).'</br>';

    }
echo changeInitial($str1);
//Cau 10
function deleteCharacters($str1)
    {

        return trim($str1).'</br>';

    }
echo deleteCharacters($str1);
//Cau 11
function deleteFirstCharacters($str1)
    {

        return ltrim($str1, 'h').'</br>';

    }
echo deleteFirstCharacters($str1);
//Cau 12
function deleteLastCharacters($str1)
    {

        return rtrim($str1, 'd').'</br>';

    }
echo deleteLastCharacters($str1);
//Cau 13
    $str3 = "My name, is, Thuong,";
    function splitString($str3){
        print_r(explode(",",$str3));
    }
    echo splitString($str3).'<br/>';
//Cau 14
    $string = array(
        'firstname' => 'Đinh ',
        'lastname' => 'Thương'
    );
    function concatenateArrayElements($string){
        return implode('', $string).'</br>';
    }
    echo concatenateArrayElements($string);
//Cau 15
    function concatenatElementsOfString($str2){
        return str_pad($str2, 20, " k").'</br>';
    }
    echo concatenatElementsOfString($str2);
//Cau 16
    function checkString($str2){
        if(strrchr($str2, 'n') == false){
            echo "Doesn't exist".'<br/>';
        }
        else {
            echo 'Result: '.strrchr($str2, 'n').'<br/>';
        }
    }
    echo checkString($str2);
//Cau 17 (Cau 6)
    
//Cau 18
    function replace($str2){
        return preg_replace('/This/', 'That', $str2).'<br/>';
    }
    echo replace($str2);

//Cau 19
    $num = 2;
    function integerCheck($num){
        if(is_int($num)){
            echo 'This is an integer.'.'<br/>';
        }
        else {
            echo 'This is not an integer.'.'<br/>';
        }
    }
    integerCheck($num);
//Cau 20
    $email = 'dinhthithuong29122002p@gmail.com';
    function checkEmail($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'Đây là email.';
        }
        else {
            echo 'Đây không là email.';
        }
    }
    checkEmail($email).'<br/>';
