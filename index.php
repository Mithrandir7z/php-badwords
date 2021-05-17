

<?php 
    // Creare una variabile con un paragrafo di testo. Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *


    $paragrafo = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde possimus temporibus recusandae non quidem, earum quas delectus Maialis.';

    $lunghezza = strlen($paragrafo);

    $ParolaDaCensurare = $_GET['badword'];

    $newParagrafo = str_replace($ParolaDaCensurare, "***", $paragrafo);

    echo $newParagrafo . " lunghezza: " . $lunghezza;

    
?>


 