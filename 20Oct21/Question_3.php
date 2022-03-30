<?php

// WAP to read character and find out whether it is upper case latter, lower case latter, 
// digit or special symbol.


$inp = $_GET['inp1'];

if(ctype_upper($inp)){
    echo $inp." is Uppercase letter";
}

elseif(ctype_lower($inp)){
    echo $inp." is Lowercase letter";
}

elseif(ctype_digit($inp)){
    echo $inp." is Number";
}

else{
    echo $inp." is Special Symbol";
}

?>