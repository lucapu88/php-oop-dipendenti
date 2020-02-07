<?php
  class Dipendenti {
    public $nome;
    public $cognome;
    public $eta;
    function __construct($_name, $_surname) { //la funzione costruttore avrà come parametri obbligatori, nome e cognome del dipendente
      $this->nome = $_name;
      $this->cognome = $_surname;
    }
    public function stampaDipendenti() { //funzione che mi stampa le 3 variabili che hanno in comune le classi derivanti da Dipendenti
      echo '<p> Nome: ' . $this->nome . '</p>';
      echo '<p> Cognome: ' . $this->cognome . '</p>';
      echo '<p> Software utilizzati: ' . $this->software . '</p>';
    }

  }

 ?>
