<!-- provate a modellizzare le classi per gestire i dipendenti di un'azienda.
Lascio a voi le scelte architetturali, domani le valutiamo insieme
Provate a metterci dentro la gestione di un'eccezione, ad esempio in una funzione che calcola lo stipendio -->
<?php
include_once 'dipendenti.php';
include_once 'developer.php';
include_once 'analisti.php';
include_once 'strumenti.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  <body>
    <h2>Developer</h2>
    <?php
    $developer = new Developer('Pippo', 'Franco', 'Javascript', 'Atom');
    $developer->stampaDipendenti();
    $developer->framework = 'bootstrap';
    echo 'Linguaggi: ' . $developer->linguaggi . '<br>';
    echo 'Framework: ' . $developer->framework . '<br>';
     ?>
     <h2>Analisti</h2>
     <?php
     $analista = new Analista('Brambilla', 'Fumagalli', 'SAP SD', 'SAP ERP');
     $analista->stampaDipendenti();
     $analista->settore = 'vendite';
     echo 'Licenze: ' . $analista->licenze . '<br>';
     echo 'Settore: ' . $analista->settore . '<br>';
      ?>
  </body>
</html>
