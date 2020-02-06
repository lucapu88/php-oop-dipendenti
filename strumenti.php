<?php

  trait Strumenti { //creo un trait dove ci sono le cose in comune tra i dipendenti. Lascio il nome strumenti anche se c'è lo stipendio poichè $stipendio è stato aggiunto dopo.
    public $software;
    public $stipendio;
    public function calcolaRal($stipendioMensile) { //funzione a caso creata soltanto come esempio per poter utilizzare una Exception
      if (!is_int($stipendioMensile)) { //se il valore passato non è un numero
        throw new Exception('Non hai inserito un numero'); //lancia un messaggio di errore
      } elseif (empty($stipendioMensile)) { //se invece non viene passato niente
        throw new Exception("Hai lasciato il parametro 'stipendio' vuoto"); //lancia un altro messaggio di error
      }
      return $stipendioMensile * 12 . '€'; //la funzione in fine ritorna il calcolo dello stipendio annuale
    }
  }

 ?>
