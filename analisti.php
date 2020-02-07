<?php
  include_once 'dipendenti.php';
  include_once 'informazioni_comuni.php';
  class Analista extends Dipendenti { //creo la classe analista estendendo la classe dipendenti
    use Info; //richiamo le caratteristiche in comune tra developer e analisti, utilizzando il trait Strumenti
    public $licenze;
    public $settore;
    public function __construct($_name, $_surname, $_license, $_software) { //copio la funzione costruttore dei Dipendenti aggiungendogli come parametri gli attributi del trait 'esportato' e un attributo creato prima
      parent::__construct($_name, $_surname);
        $this->software = $_software;
        $this->licenze = $_license;
    }
    public function stampaDipendenti() { //stessa funzione creata in dipendenti soltanto che è stata aggiunta in più la stampa delle licenze
      echo '<p> Nome: ' . $this->nome . '</p>';
      echo '<p> Cognome: ' . $this->cognome . '</p>';
      echo '<p> Software utilizzati: ' . $this->software . '</p>';
      echo '<p> Licenze acquisite: ' . $this->licenze . '</p>';
    }
  }

 ?>
