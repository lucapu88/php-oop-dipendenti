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
    $developer = new Developer('Pippo', 'Franco', 'Javascript', 'Atom', 1400); //creo un nuovo oggetto della classe developer passandogli i parametri obbligatori dichiarati nel costrutttore
    $developer->stampaDipendenti(); //stampo le cose in comune
    $developer->framework = 'bootstrap'; //definisco questa tipologia che non era definita da nessuna parte
    echo 'Linguaggi: ' . $developer->linguaggi . '<br>'; //stampo i linguaggi che sono definiti nell'oggetto developer (essendo stati dichiarati nel costruttore, sono obbligatori)
    echo 'Framework: ' . $developer->framework . '<br>'; //stampo la tipologia definita prima
    echo "RAL: " . $developer->calcolaRal(1400);
    // try {
    // echo calcolaRal(1400);
    // } catch (Exception $e) {
    // echo 'Eccezione: ' . $e->getMessage();
    // }
     ?>
     <h2>Analisti</h2>
     <?php
     $analista = new Analista('Brambilla', 'Fumagalli', 'SAP SD', 'SAP ERP', 1800); //stesse cose di sopra soltanto che vengono fatte per un'altra classe
     $analista->stampaDipendenti();
     $analista->settore = 'vendite';
     echo 'Licenze: ' . $analista->licenze . '<br>';
     echo 'Settore: ' . $analista->settore . '<br>';
     echo "RAL: " . $developer->calcolaRal(1800);
      ?>
  </body>
</html>
