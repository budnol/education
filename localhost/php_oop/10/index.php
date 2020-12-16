<?php
error_reporting(-1);
require_once 'classes/Product.php';
require_once 'classes/I3D.php';
require_once 'classes/BookProduct.php';

function debug($data){
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$book = new BookProduct('Три мушкетера', 100, 1200);

debug($book);

echo $book->getProduct();
echo $book->getDiscount();

$book->addProduct('Test', 10, 5);
$book->test();