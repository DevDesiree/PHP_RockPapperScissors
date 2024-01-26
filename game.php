<?php

session_start();

$words = ["piedra", "papel", "tijera"];

$randomInd = array_rand($words);
$randomElement = $words[$randomInd];


function chooseWinner($randomElement)
{
    $message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["opcion"])) {
            $opcionUsuario = $_POST["opcion"];
            

            if ($opcionUsuario == $randomElement) {
                $message .= "<p>El usuario ha elegido:  $opcionUsuario <br> Y la maquina ha elegido:  $randomElement </p>";
                $message .= "<h3>Habeis empatado 😮</h3>";
                session_destroy();
            } elseif (
                ($opcionUsuario == "piedra" && $randomElement == "tijera") ||
                ($opcionUsuario == "papel" && $randomElement == "piedra") ||
                ($opcionUsuario == "tijera" && $randomElement == "papel")

            ) {
                $message .= "<p>El usuario ha elegido:  $opcionUsuario <br> Y la maquina ha elegido:  $randomElement </p>";
                $message .= "<h3>Ganaste 😊</h3>";
                session_destroy();
            } else {
                $message .= "<p>El usuario ha elegido:  $opcionUsuario <br> Y la maquina ha elegido:  $randomElement </p>";
                $message .= "<h3>Has perdido 😥</h3>";
                session_destroy();
            }
        }
    }
    return $message;
}


include_once('index.php');