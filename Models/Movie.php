<?php

// Definizione della classe 'Movie'
class Movie
{
    // Variabili d'istanza
    public $titolo;
    public $anno;
    public $genere = []; // Modifica per consentire più di un genere
    public $durata;

    // Costruttore
    public function __construct($titolo, $anno, $genere, $durata)
    {
        $this->titolo = $titolo;
        $this->anno = $anno;
        $this->genere = $genere;
        $this->durata = $durata;
    }

    // Metodo d'istanza
    public function stampaInfo()
    {
        echo "Titolo: {$this->titolo}<br>";
        echo "Anno: {$this->anno}<br>";
        echo "Genere: " . implode(", ", $this->genere) . "<br>"; // Modifica per gestire più di un genere
        echo "Durata: {$this->durata} minuti<br>";
        echo "<br>";
    }
}

// Creazione di due oggetti 'Movie'
$film1 = new Movie("Interstellar", 2014, ["Fantascienza", "Drammatico"], 169);
$film2 = new Movie("Inception", 2010, ["Azione", "Thriller", "Fantascienza"], 148);
