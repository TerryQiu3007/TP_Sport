<?php
namespace TpSport;
use TpSport\Sport;

class SportBallon extends Sport{
    private int $largeur;
    private int $longeur;

    public function __construct(string $unNom, int $unNbJoueurs, int $unelargeur, int $unelongeur){
        $this->nomSport = $unNom;
        $this->nbJoueurs = $unNbJoueurs;
        $this->largeur = $unelargeur;
        $this->longeur = $unelongeur;
    }

    public function getLargeur(): int 
    {
        return $this->largeur;
    }
    public function getLongeur(): int 
    {
        return $this->longeur;
    }
}