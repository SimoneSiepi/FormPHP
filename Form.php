<?php
function controlloValori($scelta)
{
    if (isset($scelta)) {
        $contenitore = $scelta;
    } else {
        $contenitore = "nessuna scelta selezionata";
    }
    return $contenitore;
}

function calcoloEta($dataDiNascita){
    $nascita= new DateTime($dataDiNascita);
    $dataAttuale = new DateTime();

    //* calcolo la differenza tra date
    $differenza=$nascita->diff($dataAttuale);

    //* estraggo l'anno di differenza e lo inserisco nella variabile eta
    $eta=$differenza->y;
    return $eta;
}

$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$sesso = controlloValori($_POST["scelta"]);
$data = controlloValori($_POST["data_nascita"]);
$eta_calcolata=calcoloEta($data);

?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form in php</title>
</head>

<body>
    <h1>form compilato</h1>
    <?php
         if ($sesso=="Donna") {
            print("<h3>benvenuta $nome $cognome</h3><br>");
         }else{
            print("<h3>benvenuto $nome $cognome</h3>");
         }
        print("<p>informazioni generali<p>");

        print("Eta:$eta_calcolata <br>Data di Nascita:$data <br>Sesso:$sesso");

    ?>
</body>

</html>