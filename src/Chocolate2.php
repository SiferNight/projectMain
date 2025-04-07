<?php
namespace Project\Main;
require_once 'vendor/autoload.php';
use Ann\Repo\Snek;


class chocolate2 extends Snek{

    public function __construct(string $name="Чокопай",string $chocolate="Темный шоколад",array $toppings=["зефир","клюбничный джем"])
    {
        parent::__construct($name, $chocolate, $toppings);
    }
}