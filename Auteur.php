<?php

class Auteur
{
    private string $nom;
    private string $prenom;
    private int $anneeNaissance;

    public function __construct(string $nom, string $prenom, int $anneeNaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->anneeNaissance = $anneeNaissance;
    }

    public function toString(): string
    {
        return "Auteur : " . $this->prenom . " " . $this->nom;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function getAnneeNaissance(): int
    {
        return $this->anneeNaissance;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    public function setAnneeNaissance(int $anneeNaissance): void
    {
        $this->anneeNaissance = $anneeNaissance;
    }
}