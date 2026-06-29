<?php
require './Statut.php';

class Note {

    private float $valeur;
    private string $matier;
    private Statut  $status;


    public function __construct(float $valeur, string $matier)
    {
        $this->valeur = $valeur ;
        $this->matier = $matier;

        if ($this->valeur >= 10)
        {
            $this->status = Statut::VALIDE;
        }

          if ($this->valeur < 10)
        {
            $this->status = Statut::AJOURNE;
        }
    }

    public function getValeure():string {
        return $this->valeur;
    }

    public function setValeure(float $valeur):void{
        $this->valeur = $valeur;
    }

    public function getMatier():string {
        return $this->matier;
    }

    public function setMatier(string $matier){
        $this->matier = $matier;
    }
}