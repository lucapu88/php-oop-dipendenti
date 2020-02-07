<?php

  trait Info { //creo un trait dove ci sono le cose in comune tra i dipendenti.
    public $software;
  //dichiaro questi parametri private, essendo parametri più "sensibili"
    private $oreGiornaliere;
    private $giorniSettimanali;
    private $pagaOraria;

    public function setPrintInfo($hour, $day, $pay) { //prende i 3 parametri private li setta e li stampa
      echo '<p>Ore giornaliere: ' . $this->oreGiornaliere = $hour . 'h</p>';
      echo '<p>Giorni Settimanali: ' . $this->giorniSettimanali = $day . 'h</p>';
      echo '<p>Paga oraria: ' . $this->pagaOraria = $pay . '€</p>';
    }

    public function calcolaStipendio($hour, $day, $pay) { //calcola lo stipendio medio mensile
      if (!is_numeric($hour) || !is_numeric($day) || !is_numeric($pay)) { //se i valori passati non sono numeri
        throw new Exception('Non hai inserito un numero'); //lancia un messaggio di errore
      } elseif ($hour < 0 || $day < 0 || $pay < 0) { //se i numeri passati sono negativi
        throw new Exception('Hai inserito un numero negativo'); //lancia un messaggio di errore
      }
      $pagaGiornaliera = $pay * $hour; //calcola la paga giornaliera moltiplicando la paga oraria per le ore giornaliere
      $pagaSettimanale = $pagaGiornaliera * $day; //calcola la paga settimanale moltiplicando la paga giornaliera calcolata prima per i giorni settimanali
      $pagaMensile = $pagaSettimanale * 4; //calcola la paga mensile moltiplicando la paga settimanale per 4
      echo '<p>Stipendio mensile: '. $pagaMensile . '€</p>'; //stampa la paga mensile
      echo '<p>Stipendio annuale: '. $pagaMensile * 12 . '€</p>'; //stampa il risultato della paga mensile per 12
    }
  }

 ?>
