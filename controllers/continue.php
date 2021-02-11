<?php
@session_start();
if(isset($_SESSION["jugador"])){
    $jugador = $_SESSION["jugador"];
    $nivel = $_SESSION["nivel"];
    $ganador = $_SESSION["dato_ganador"];
    if ($ganador == "El bot de Braquetes") {
        $_SESSION["perder"] = $_SESSION["perder"] + 1;
    } else if ($ganador == $_SESSION["jugador"]) {
        $_SESSION["ganar"] = $_SESSION["ganar"] + 1;
    } else {
        $_SESSION["empate"] = $_SESSION["empate"] + 1;
    }


    $partida = $_SESSION["partida"];
    $ganadas = $_SESSION["ganar"];
    $perdidas = $_SESSION["perder"];
    $empatadas = $_SESSION["empate"];
}
@session_destroy();
@session_start();
$_SESSION["jugador"]=$jugador;
$_SESSION["nivel"]=$nivel;
$_SESSION["partida"] = $partida+1;
$_SESSION["ganar"] = $ganadas;
$_SESSION["perder"] = $perdidas;
$_SESSION["empate"] = $empatadas;
$_SESSION["turno"] = 0;
header("Location: ../gato.php");
