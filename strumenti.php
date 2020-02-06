<?php

  trait Strumenti { //creo un trait dove ci sono le cose in comune tra i dipendenti. Lascio il nome strumenti anche se c'è lo stipendio poichè $stipendio è stato aggiunto dopo.
    public $software;
    public $stipendio;
    public function calcolaRal($stipendioMensile) { //funzione a caso creata soltanto come esempio per poter utilizzare una Exception
      if (!is_int($stipendioMensile)) {
      throw new Exception('Non hai inserito un numero');
      }
      return $stipendioMensile * 12 . '€';
    }
  }

 ?>
