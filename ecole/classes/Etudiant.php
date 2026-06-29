<?php

require './autoload.php';

class Etudiant extends Personne implements Evaluatable {

    private array $notes = [];


    public function ajouterNote(Note $note):void {
        $this->notes[] = $note;
    }


    public function calculerMoyenne(): float
    {
        $moyenne = 0;

        foreach($this->notes as $note)
        {
            $moyenne += $note->getValeure();
            echo $note->getMatier() . "\n" . $note->getValeure() . "\n" ;
        }

        return $moyenne / count($this->notes);
    }

    public function afficherNotes():array
    {
        return $this->notes;
    }

    public function sePresenter():string{
        return "name: {$this->getNom()} {$this->getPrenom()} id : " . Personne::getid() . "\n";
    }

}

// testing 
