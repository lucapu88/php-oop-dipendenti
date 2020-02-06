<?php
  include_once 'dipendenti.php';
  include_once 'strumenti.php';
  class Analista extends Dipendenti {
    use Strumenti;
    public $licenze;
    public $settore;
    public function __construct($_name, $_surname, $_license, $_software) {
      parent::__construct($_name, $_surname);
        $this->software = $_software;
        $this->licenze = $_license;
    }
  }

 ?>
