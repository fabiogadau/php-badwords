<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Badwords</title>
</head>
<body>

<!----------
   Creare una variabile con un paragrafo di testo.
   Visualizzare a schermo il paragrafo.
   Visualizzare a schermo la relativa lunghezza del paragrafo.
   Sostituire tutte le ricorrenze, nel paragrafo creato, della badword passata in GET (query string) con tre * (asterischi).
---------->

<?php 
   // Variabile stringa
   $string = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.'; 

   // Variabile lunghezza stringa
   $string_length = strlen($string);

   // Variabile badword
   $bad_word = $_GET['badword'];

   // Variabile sostituzione badword con '***'
   $string_replaced = str_replace($bad_word, '***', $string);
?>

<!-- Print stringa -->
<p> <?php echo $string; ?> </p>

<!-- Print lunghezza stringa -->
<p>La stringa contiene <?php echo $string_length; ?> caratteri.</p>

<!-- Print stringa con badword sostituita -->
<p>La badword è sostituita da '***': <?php echo $string_replaced; ?></p>
   
</body>
</html>