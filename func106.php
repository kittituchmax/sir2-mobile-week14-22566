<?php
    //Deault Argument values
    function greeting($fname="Elon",$lname="Musk"){
        return$fname. " " . $lname. "<br />";
    }
    $message1 = greeting();
    $message2 = greeting("Mark","Zuckerberg");
    print "This is a deault argument values =" . $message1;
    print "This is a deault argument values =" . $message2;
    
?> 