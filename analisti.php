<?php
  include_once 'dipendenti.php';
  include_once 'strumenti.php';
  class Analista extends Dipendenti { //creo la classe analista estendendo la classe dipendenti
    use Strumenti; //richiamo le caratteristiche in comune tra developer e analisti, utilizzando il trait Strumenti
    public $licenze;
    public $settore;
    public function __construct($_name, $_surname, $_license, $_software, $_salary) { //copio la funzione costruttore dei Dipendenti aggiungendogli come parametri gli attributi del trait 'esportato' e un attributo creato prima
      parent::__construct($_name, $_surname);
        $this->software = $_software;
        $this->stipendio = $_salary;
        $this->licenze = $_license;
    }
  }

 ?>
