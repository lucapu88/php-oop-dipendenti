
<?php
include_once 'dipendenti.php';
include_once 'developer.php';
include_once 'analisti.php';
include_once 'informazioni_comuni.php';
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
    $developer = new Developer('Pippo', 'Franco', 'Javascript', 'Atom'); //creo un nuovo oggetto della classe developer passandogli i parametri obbligatori dichiarati nel costrutttore
    $developer->stampaDipendenti(); //stampo le cose in comune
    $developer->framework = 'bootstrap'; //definisco questa tipologia che non era definita da nessuna parte
    echo '<p>Framework: ' . $developer->framework . '</p>'; //stampo la tipologia definita prima
    try { //provo la mia funzione
      $developer->calcolaStipendio(8, 5, 8); //calcola lo stipendio in base a (ore giornaliere,giorni settimanali, paga oraria)
    } catch (Exception $e) { //nel caso c'è un errore
      echo 'Eccezione: ' . $e->getMessage(); //in base all'errore recupera il messaggio appropriato e lo stampa
    }

  ?>
     <h2>Analisti</h2>
  <?php
     $analista = new Analista('Brambilla', 'Fumagalli', 'SAP SD', 'SAP ERP'); //stesse cose di sopra soltanto che vengono fatte per un'altra classe
     $analista->stampaDipendenti();
     $analista->settore = 'vendite';
     echo '<p>Settore: ' . $analista->settore . '</p>';
     try {
       $analista->calcolaStipendio(9, 5, 11);
     } catch (Exception $e) {
       echo 'Eccezione: ' . $e->getMessage();
     }

  ?>
  </body>
</html>
