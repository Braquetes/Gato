<?php
@session_start();
if(isset($_SESSION["jugador"])){
    $jugador = $_SESSION["jugador"];
    $nivel = $_SESSION["nivel"];
}
@session_destroy();
@session_start();
$_SESSION["jugador"]=$jugador;
$_SESSION["nivel"]=$nivel;
$_SESSION["partida"] = 0;
$_SESSION["ganar"] = 0;
$_SESSION["perder"] = 0;
$_SESSION["empate"] = 0;
$_SESSION["turno"] = 0;
$_SESSION["tiro"] = 0;
header("Location: ../gato.php");
?>