<?php
  include_once 'dipendenti.php';
  include_once 'strumenti.php';
  class Developer extends Dipendenti {
    use Strumenti;
    public $linguaggi;
    public $framework;
    public function __construct($_name, $_surname, $_progrLanguages, $_software) {
      parent::__construct($_name, $_surname);
        $this->software = $_software;
        $this->linguaggi = $_progrLanguages;
    }
  }

 ?>
