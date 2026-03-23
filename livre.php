<?php

class Livre
{
    private string $titre;
    private bool $disponible;

    // Constructeur
    public function __construct(string $titre)
    {
        $this->titre = $titre;
        $this->disponible = true;
    }

    // Emprunter le livre
    public function emprunter(): void
    {
        $this->disponible = false;
    }

    // Retourner le livre
    public function retourner(): void
    {
        $this->disponible = true;
    }

    // Afficher les informations
    public function toString(): string
    {
        $etat = $this->disponible ? "Disponible" : "Emprunté";
        return "Titre : " . $this->titre . " État : " . $etat;
    }

    // Getter du titre
    public function getTitre(): string
    {
        return $this->titre;
    }

    // Vérifier si disponible
    public function estDisponible(): bool
    {
        return $this->disponible;
    }
}

?>