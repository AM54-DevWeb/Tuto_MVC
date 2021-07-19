<?php

namespace model;

class Utilisateur
{
    private $nom;
    private $prenom;
    private $age;

    public function __construct($nom = "", $prenom = "", $age = 18)
    {
        //$this->nom = strtoupper($nom);
        $this->setNom($nom);
        $this->prenom = $prenom;
        $this->age = $age;
    }

    public function nomComplet()
    {
        return $this->nom . " " . $this->prenom;
    }

    //---------------- ACCESSEURS ------------------

    //--- getter de nom ----
    public function getNom()
    {
        return $this->nom;
    }

    //---- setter de nom ----
    public function setNom($nom)
    {
        $this->nom = strtoupper($nom);
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
}