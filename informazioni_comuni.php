<?php

  trait Info { //creo un trait dove ci sono le cose in comune tra i dipendenti.
    public $software;
  //dichiaro questi parametri private, essendo parametri più "sensibili"
    private $oreGiornaliere;
    private $giorniSettimanali;
    private $pagaOraria;
    //CREA FUNZIONE PER STIPENDIO MENSILE
      // paga_giornaliera= $pagaOraria per le $oreGiornaliere
      // paga_settimanale = paga_giornaliera per $giorniSettimanali
      // return paga_mensile= paga_settimanale per 4
    public function setPrintInfo($hour, $day, $pay) { //prende i 3 parametri private li setta e li stampa
      echo '<p>Ore giornaliere: ' . $this->oreGiornaliere = $hour . 'h</p>';
      echo '<p>Giorni Settimanali: ' . $this->giorniSettimanali = $day . 'h</p>';
      echo '<p>Paga oraria: ' . $this->pagaOraria = $pay . '€</p>';
    }

    public function calcolaPagaMensile($hour, $day, $pay) {
      if (!is_int($hour) && !is_int($day) && !is_int($pay)) { //se i valori passati non sono numeri
        throw new Exception('Non hai inserito un numero'); //lancia un messaggio di errore
      } elseif ($hour < 0 && $day < 0 && $pay < 0) { //se i numeri passati sono negativi
        throw new Exception('Hai inserito un numero negativo'); //lancia un messaggio di errore
      }
      $pagaGiornaliera = $pay * $hour;
      $pagaSettimanale = $pagaGiornaliera * $day;
      echo '<p>Stipendio mensile: '. $pagaSettimanale * 4 . '€</p>';
    }

    public function calcolaRal($stipendioMensile) { //funzione a caso creata soltanto come esempio per poter utilizzare una Exception
      if (!is_int($stipendioMensile)) { //se il valore passato non è un numero
        throw new Exception('Non hai inserito un numero'); //lancia un messaggio di errore
      } elseif (empty($stipendioMensile)) { //se invece non viene passato niente
        throw new Exception("Devi inserire uno stipendio"); //lancia un altro messaggio di error
      }
      return $stipendioMensile * 12 . '€'; //la funzione in fine ritorna il calcolo dello stipendio annuale
    }
  }

 ?>
