<?php
$products = [
    [
        'name' => 'Siulai',
        'price' => 12.4,
        'img' => 'siulai.jpg'
    ],
    [
        'name' => 'adata',
        'price' => 1.99,
        'img' => 'adata.jpg'
    ],
    [
        'name' => 'Siulai2',
        'price' => 12.4,
        'img' => 'siulai1.jpg'
    ],
    [
        'name' => 'adata2',
        'price' => 1.99,
        'img' => 'adata1.png'
    ],
    [
        'name' => 'Siulai3',
        'price' => 12.4,
        'img' => 'siulai2.jpeg'
    ],
    [
        'name' => 'adata2',
        'price' => 1.99,
        'img' => 'adata1.png'
    ]
    
];

// paveiksleliai parsisiusti lokaliai prie failo
// linija kas du produktus

$x = 0;
foreach($products as $product){
    //print_r($product);
    echo '<img width="100" src="'. $product["img"] . '" />';
    echo '<h2>' . $product["name"] . '</h2>';
    echo '<h3>' . 'Kaina: ' . $product["price"] . 'eur' . '</h3>';
    $x++;
    if ($x % 2 == 0){
    echo '<hr>';
    }
}
?>
