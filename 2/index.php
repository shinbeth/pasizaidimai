<?php

// $x = 2.5;
// $y = 2;
// 
// var_dump($x);
// var_dump($y);
// var_dump($x * $y);
/////////////////////////////

// $x = 2;
// $y = 2;

// if($x === $y){
//     echo 'true';
// }elseif ($x == 3){
//     echo 'false';
// } else {
//     echo 'whats left';
// }


// $x = 2;
// $y = 2;
// 
// switch($x){
//     case 2:
//         echo '$x = 2';
//         break;
//     case 3:
//         echo '$x = 3';
//         break;
//     default:
//         echo 'not match';
//         break;
// }


/*
if(!$variable){
    $variable = 2;
}
echo $variable;*/




$products = [
    [
        'name' => 'Siulai',
        'price' => 12.4,
        'special_price' => 1,
        'img' => 'siulai.jpg'
    ],
    [
        'name' => 'adata',
        'price' => 1.99,
        'special_price' => 1,
        'img' => 'adata.jpg'
    ],
    [
        'name' => 'Siulai2',
        'price' => 12.4,
        'special_price' => 1,
        'img' => 'siulai1.jpg'
    ],
    [
        'name' => 'adata2',
        'price' => 1.99,
       'special_price' => 1,
        'img' => 'adata1.png'
    ],
    [
        'name' => 'Siulai3',
        'price' => 12.4,
       'special_price' => 1,
        'img' => 'siulai2.jpeg'
    ],
    [
        'name' => 'adata2',
        'price' => 1.99,
        'special_price' => 1,
        'img' => 'index.jpeg'
    ]
    
];
$x = 0;
foreach($products as $product){
    //print_r($product);
    
    echo '<img width="100" src="'. $product["img"] . '" />';
    
    echo '<h2>' . $product["name"] . '</h2>';
    
    if(!$product["special_price"]){
    
        echo '<h3>' . 'Kaina: ' . $product["price"] . 'eur' . '</h3>';
    }
    
    if($product["special_price"]){
    
        echo '<h3>' . 'Sena kaina: ' . '<del>' . $product["price"] .'</del>' .' Nauja kaina: ' . $product["special_price"]. 'eur' . '</h3>';
    }
    
    $x++;
    if ($x % 3 == 0){
    echo '<hr>';
    }
}


// for($y = 0; $y < 10; $y++){    // for($i = 0; $i = 10; $i++)
//     for($x = 0; $x <10; $x++){
//         if($y%2==0)
//         {
//             echo '#';
//         };
//         if($y%2!=0){
//             echo '.';
//         };
//        
//     
//     echo $y;
// }
// 
//             echo '<br>';
// }


// echo 'Metai; Menesis;';
// echo '<br>';
// 
// for ($years = 2015; $years < 2022; $years++){
// 
//     for($months = 1; $months <=12; $months++){
//         for($day = 1; $day <= 31; $day++){
//         echo $years.' '.$months.' '.$day;
//         echo '<br>';
//         }
//     }
// 
// 
// }


// for($years = 2015; $years < 2022; $years++){
// for($months = 1; $months <= 12; $months++){
// if($months == 1 || $months == 3 || $months == 5 || $months == 8 || $months == 10 || $months == 12){
// $to = 31;
// }elseif($months == 2){
// if($years % 4 == 0){
// $to = 29;
// }else{
// $to = 28;
// }
// }else{
// $to = 30;
// }
// for($day = 1; $day <= $to; $day++){
// echo $years.' '.$months.' '.$day; 
// echo '<br>';
// }
// }


