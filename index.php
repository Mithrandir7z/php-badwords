

<?php 
    // Creare una variabile con un paragrafo di testo. Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *


    $paragrafo = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde possimus temporibus recusandae non quidem, earum quas delectus Perite.';

    $lunghezza = strlen($paragrafo);

    $newParagrafo = str_replace("Perite", "***", $paragrafo);

    echo $newParagrafo . " lunghezza: " . $lunghezza;
?>

 