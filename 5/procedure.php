<?php 

//echo 'ok';
// $_GET
//print_r($_POST);

//

$email = $_POST[email];

function isEmailValid($email){

    if(strpos($email, '@')){
        echo $email;
        echo '<br>';
    } else{
        echo 'lievas';
        echo '<br>';
        }

}

isEmailValid($email);
