<?php
  class Dipendenti {
    public $nome;
    public $cognome;
    public $eta;
    function __construct($_name, $_surname, $_age) {
      $this->nome = $_name;
      $this->cognome = $_surname;
      $this->eta = $_age;
    }
  }

 ?>
