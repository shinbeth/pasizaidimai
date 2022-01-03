<?php

$productName = 'Rudeniniai Batai Rudi';
$productDescription = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
$productBrand = 'Nike';

$prodID = 1;
$prodQty = 3;
$sybol = '@';

$productPrice = 59.99;
$size = 41.5;

$isInStock = true;
$isWaterproof = false;
$airless = true;

echo "<pre>";
$product = [$productName,  //komentaras
            $productBrand, 
            $prodQty,
            $productPrice
            ];

$product2 = ['vasariniai batai raudoni',  //komentaras
            $productBrand, 
            $prodQty,
            $productPrice
            ];            

/*
    Sudai myzalai
    Budulis
    Sukos
*/
   
$pvm = 21;

$priceWithTax = $productPrice * ( 1 + ($pvm/100));

echo 'Kaina su pvm: ';
echo $priceWithTax;
echo '<br>';
echo 'Kaina be pvm: ';
echo $productPrice;
   
   
   
   
   
   
         
// + - / * %;         
            
// $x = 6;
// $y = 2;
// 
// $suma = $x + $y;
// echo $suma;
// echo '<br>';
// 
// $skirtumas = $x - $y;
// echo $skirtumas;
            
            
// $products = [$product,$product2];                    
//print_r($product);
// print_r($products);
//print_r($product[3]);
//print_r($product2[0]);
// echo '<h1>',$productName, '</h1>';
// echo '<br>';
// echo $productDescription;
// echo '<br>';
// echo $productBrand;
// echo '<br>';
// echo $prodID;
// echo '<br>';
// echo $prodQty;
