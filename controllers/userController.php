<?php 

if(isset($_POST["nombre_jugador"])){
    @session_start();
    $_SESSION["jugador"] = $_POST["nombre_jugador"];
    $_SESSION["nivel"] = $_POST["nivel"];
    $_SESSION["partida"] = 1;
    $_SESSION["ganar"] = 0;
    $_SESSION["perder"] = 0;
    $_SESSION["empate"] = 0;
    $_SESSION["turno"] = false;
    $_SESSION["tiro"] = 0;

    echo "<script type=\"text/javascript\"> alert (\"Que comience el juego\"); </script>";
    echo "<script type='text/javascript'>
            window.location='../gato.php';
            </script>";
}

?>