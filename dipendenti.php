<?php
  class Dipendenti {
    public $nome;
    public $cognome;
    public $eta;
    function __construct($_name, $_surname) {
      $this->nome = $_name;
      $this->cognome = $_surname;
    }
    public function stampaDipendenti() {
      echo 'Nome: ' . $this->nome . '<br>';
      echo 'Cognome: ' . $this->cognome . '<br>';
      echo 'Software: ' . $this->software . '<br>';
    }
  }

 ?>
