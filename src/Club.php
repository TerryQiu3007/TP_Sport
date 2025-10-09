<?php

namespace TpSport;

class Club{
    private int $idClub;
    private string $nomClub;
    private int $nbPoint;
    private array $lesSports=[];

    public function __construct(string $unId, string $unNom, int $unNbPoint){
        $this->idClub=$unId;
        $this->nomClub=$unNom;
        $this->nbPoint=$unNbPoint;
    }

    public function getIdClub(): int 
    {
        return $this->idclub;
    }
    public function getNomClub(): string 
    {
        return $this->nomClub;
    }
    public function getNbPoint(): int 
    {
        return $this->nbPoint;
    }
    public function getLesSport(): array
    {
        return $this->lesSport;
    }
    public function ajouterSport(Sport $unSport): void
    {
        $this->lesSports[]=$unSport;
    }
}