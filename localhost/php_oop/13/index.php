<?php

use wfm\interfaces\IGadget;
use app\{BookProduct, NotebookProduct};

require_once __DIR__ . '/vendor/autoload.php';

error_reporting(-1);

/*function autoloder($class)
{
    $class = str_replace("\\", "/", $class);
    $file = __DIR__ . "/{$class}.php";
    if(file_exists($file)){
        require_once $file;
    }
}
spl_autoload_register('autoloder');*/

function debug($data){
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function offerCase(IGadget $product){
    echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
}

$book = new BookProduct('Три мушкетера', 100, 1200);
$notebook = new NotebookProduct('Dell', 1000, 'Intel');

offerCase($notebook);

debug($book);
