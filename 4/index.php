<?php 
include 'myOwnLib.php';
//echo '4 pamoka';


////////////////////////////////////////////////////

// $productPrice = 12;
// $discout = 20;
// 
// $finalPrice = $productPrice * ((100 - $discount) / 100);



//// Pagal pirma paskaitos funkciju pavyzdi


function getDiscount($Price, $Discount){

        $discountedPrice = $Price * (( 100 - $Discount ) / 100);
    
return $discountedPrice;
}


function addVat($Price, $Vat){
    $vatRatio = $Vat / 100 + 1;

    $vatedPrice = $Price * $vatRatio;

    return $vatedPrice;
}

$ltVat = 21;

echo getDiscount(100,20);
echo '<br>';
echo addVat(getDiscount(100,20),$ltVat);
echo '<br>';
echo getDiscount(1273,33);
echo '<br>';
echo '<br>';
///// Pagal antra paskaitos funkciju pavyzdi

$userEmail = 'user@email.lt';

function clearEmail($email){
    $email = strtolower($email);
    
    return trim($email);
}


echo clearEmail(' bObikAs@lemp.lv ');
echo '<br>';

//-------------------------------------------------------------------

function isEmailValid($email){

    if(strpos($email, '@')){
        echo $email;
        echo '<br>';
    } else{
        echo 'lievas';
        echo '<br>';
        }

}

isEmailValid('bobas@asd');
echo '<br>';

//-----------------------------------------------------------------


$name = 'Puffy';
$surname = 'Barbarian';


function usernameGen($name,$surname){

    $x = substr($name,0,3);
    $y = substr($surname,0,3);
    echo strtolower($x) . strtolower($y) . rand(1, 100);

    
}


usernameGen('lole','punk');

echo '<br>';

//-------------------------------------------------------------------

// is title padaryti sluga

$title = "Turkijoje infliacija rekordine";

$slug = str_replace(" ", "-", $title);

echo $slug;
echo '<br>';

// -------------------------------





