<?php 

//echo '4 pamoka';

$productPrice = 12;
$discout = 20;

$finalPrice = $productPrice * ((100 - $discount) / 100);

//echo '<div class="price">'.$finalPrice.'</div>';


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
