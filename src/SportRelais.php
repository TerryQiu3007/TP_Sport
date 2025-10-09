<?php

namespace TpSport;
use TpSport\Sport;

class SportRelais extends Sport{
    private int $distance;

    public function __construct(string $unNom, int $uneDistance, int $unNbJoueurs){
        $this->nomSport = $unNom;
        $this->nbJoueurs = $unNbJoueurs;
    }
    
    public function getDistance(): int 
    {
        return $this->distance;
    }
}