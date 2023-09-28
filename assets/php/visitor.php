<?php
// Nome del file per memorizzare il conteggio dei visitatori
$filename = 'contatore.txt';

// Controlla se il file esiste
if (file_exists($filename)) {
    // Leggi il conteggio attuale dal file
    $conteggio = intval(file_get_contents($filename));
} else {
    // Se il file non esiste, inizia il conteggio da zero
    $conteggio = 0;
}

// Incrementa il conteggio per l'attuale visitatore
$conteggio++;

// Scrivi il nuovo conteggio nel file
file_put_contents($filename, $conteggio);

// Stampare il conteggio dei visitatori
echo "Numero di visitatori: " . $conteggio;
?>
