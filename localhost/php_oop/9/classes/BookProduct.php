<?php


class BookProduct extends Product
{
    public $numPages;

    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
        $this->setDiscount(5);
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .="Скидка: {$this->getDiscount()}%<br>";
        $out .="Цена без скидки: {$this->price}<br>";
        $out .="Кол-во страниц: {$this->numPages}<br>";
        return $out;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }


}