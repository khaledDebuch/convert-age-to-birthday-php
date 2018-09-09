<?php

function age_To_Birthday($age) {
    $days = (int)($age * 365); //convert age to days

    $date = new DateTime("today -$days day");
    $birthday = $date->format('Y-m-d');
    return $birthday;
}

// Test Results
echo age_To_Birthday(1)     . "<br>"; //2017-09-09
echo age_To_Birthday(5)     . "<br>"; //2013-09-10
echo age_To_Birthday(1.5)   . "<br>"; //2017-03-11
echo age_To_Birthday(1.25)  . "<br>"; //2017-06-10
echo age_To_Birthday(0.25)  . "<br>"; //2018-06-10
echo age_To_Birthday(0.5)   . "<br>"; //2018-03-11
echo age_To_Birthday(0.75)  . "<br>"; //2017-12-10
?>
