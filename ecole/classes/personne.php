<?php

abstract class Personne {

    
    protected string $nom;
    protected string $prenom;
    protected static int $id = 0;

    public function __construct(string $nom, string $prenom )
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        self::$id++;
    }

    public static function getid():int {
        return self::$id;
    }

    public function getNom():string {
        return $this->nom;
    }

    public function setNom(string $nom):void
    {
        $this->nom = $nom;
    }

    public function getPrenom():string {
        return $this->prenom;
    }

    public function setPrenom(string $prenom):void {
        $this->prenom = $prenom;
    }

    abstract public function sePresenter():string;
}

// testing 


