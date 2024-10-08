<!-- Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password
(abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password.
Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere,
lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che
includeremo poi nella pagina principale.

Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite
$_SESSION recupererà la password da mostrare all’utente.

Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli.
Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e
simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. -->

<?php
require_once __DIR__ . "/functions/functions.php";
    // creo variabile per gestire messaggio
    $message = '';
    $newPassword= '';

    if(isset($_GET["password"]) && !empty($_GET["password"]) && is_numeric($_GET["password"])){
        $maxNum = $_GET["password"];
        $newPassword = generatePassword($maxNum);
        $message = "Password creata con successo! La tua nuova password è : {$newPassword}";
    } else {
        $message = "Nessun paramentro valido inserito";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ginatovaralmario">
    <meta name="project" content="php-password-generator">
    <title>Document</title>
    <!-- added bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <main class="container">
        <section class="text-center">
            <h1 class="text-secondary pt-5">STRONG PASSWORD GENERATOR</h1>
            <h2 class="text-white pb-3">Genera una password sicura</h2>
            <div class="box">
                <div class="card">
                    <div class="card-body bg-info-subtle">
                        <?= $message ?>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <form action="index.php" method="GET">
                            <label for="password">Lunghezza password: </label>
                            <input type="text" id="password" name="password">
                            <button type="submit" class="btn btn-primary">Invia</button>
                            <button class="btn btn-secondary">Annulla</button>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>