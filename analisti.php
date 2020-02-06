<?php
  include_once 'dipenenti.php';
  include_once 'strumenti.php';
  class Analista extends Dipendenti {
  use Strumenti;
  public $licenze;
  public $settore;

  }

 ?>
