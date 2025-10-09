<?php

namespace TpSport;

use TpSport\Club;

class Sport{

    private string $nomSport;
    private int $nbJoueurs;

    public function __construct(string $unNom, int $unNbJoueurs){
        $this->nomSport = $unNom;
        $this->nbJoueurs = $unNbJoueurs;

    }

    public function getNomSport():string 
    {
        return $this->nomSport;
    }
    public function getNbJoueurs():string 
    {
        return $this->nbJoueurs;
    }
}