<?php

namespace Project\Main;
require_once 'vendor/autoload.php';
use Ann\Repo\ChocolateFabrik;
use Ann\Repo\Snek;
use Project\Main\Chocolate1;
use Project\Main\Chocolate2;
use Project\Main\Chocolate3;


class MiniChocolateFabrik extends ChocolateFabrik{
    public array $vidChocolate = [
        "Шоколадка", 
        "Чокопай", 
        "Крамбл куки", 
        "Барни"
    ];

    public function createSnek(string $name): Snek {
            if ($name === "Шоколадка") {
                $newChocolate1 = new Chocolate1();
                return $newChocolate1;
            }
    
            if ($name === "Чокопай") {
                $newChocolate2 = new Chocolate2();
                return $newChocolate2;
            }
    
            if ($name === "Крамбл куки") {
                $newChocolate3 = new Chocolate3();
                return $newChocolate3;
            }

            if ($name === "Барни") {
                $newChocolate4 = new Snek ($name, "банановый", ["медведь", "бананы"]) ;
                return $newChocolate4;
            }
    
            $i=0;
            foreach($this->VidChocolate as $VidChocolate){
                if ($name===$VidChocolate){ 
                    $i=$i+1;
                }
            }
            if ($i===0){
                echo "Такой вкусняшки нет в списке(";   
            }
    
            exit;

    }
}