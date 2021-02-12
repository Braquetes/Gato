<?php
@session_start();
if (!isset($_SESSION["jugador"])) {
    require("../Gato/controllers/config.php");
    login();
}
$x = 0;


if (isset($_POST["espacio00"])) {
    $_SESSION["espacio00"] = $_POST["espacio00"];
}
if (isset($_POST["espacio01"])) {
    $_SESSION["espacio01"] = $_POST["espacio01"];
}
if (isset($_POST["espacio02"])) {
    $_SESSION["espacio02"] = $_POST["espacio02"];
}
if (isset($_POST["espacio10"])) {
    $_SESSION["espacio10"] = $_POST["espacio10"];
}
if (isset($_POST["espacio11"])) {
    $_SESSION["espacio11"] = $_POST["espacio11"];
}
if (isset($_POST["espacio12"])) {
    $_SESSION["espacio12"] = $_POST["espacio12"];
}
if (isset($_POST["espacio20"])) {
    $_SESSION["espacio20"] = $_POST["espacio20"];
}
if (isset($_POST["espacio21"])) {
    $_SESSION["espacio21"] = $_POST["espacio21"];
}
if (isset($_POST["espacio22"])) {
    $_SESSION["espacio22"] = $_POST["espacio22"];
}


$contador = 0;

$tiro = !$_SESSION["turno"];
$_SESSION["turno"] = $tiro;
$tiro = !$tiro;
$tiro;
if ($tiro == false) {
    header("Location: gato.php");
}
if ($tiro == true) {
    $xd = 0;
    while ($xd <= 0) {
        $permitted_chars = 'ABCDEFGHI';
        $random = substr(str_shuffle($permitted_chars), 0, 1);
        $contador = $contador + 1;
        if ($random == "A") {
            if (!isset($_SESSION["espacio00"]) && !isset($_SESSION["espacio00bot"])) {
                $_SESSION["espacio00bot"] = 1;
                $xd = 1;
                break;
            }
        }
        if ($random == "B") {
            if (!isset($_SESSION["espacio01"]) && !isset($_SESSION["espacio01bot"])) {
                $_SESSION["espacio01bot"] = 2;
                $xd = 1;
                break;
            }
        }
        if ($random == "C") {
            if (!isset($_SESSION["espacio02"]) && !isset($_SESSION["espacio02bot"])) {
                $_SESSION["espacio02bot"] = 3;
                $xd = 1;
                break;
            }
        }
        if ($random == "D") {
            if (!isset($_SESSION["espacio10"]) && !isset($_SESSION["espacio10bot"])) {
                $_SESSION["espacio10bot"] = 4;
                $xd = 1;
                break;
            }
        }
        if ($random == "E") {
            if (!isset($_SESSION["espacio11"]) && !isset($_SESSION["espacio11bot"])) {
                $_SESSION["espacio11bot"] = 5;
                $xd = 1;
                break;
            }
        }
        if ($random == "F") {
            if (!isset($_SESSION["espacio12"]) && !isset($_SESSION["espacio12bot"])) {
                $_SESSION["espacio12bot"] = 6;
                $xd = 1;
                break;
            }
        }
        if ($random == "G") {
            if (!isset($_SESSION["espacio20"]) && !isset($_SESSION["espacio20bot"])) {
                $_SESSION["espacio20bot"] = 7;
                $xd = 1;
                break;
            }
        }
        if ($random == "H") {
            if (!isset($_SESSION["espacio21"]) && !isset($_SESSION["espacio21bot"])) {
                $_SESSION["espacio21bot"] = 8;
                $xd = 1;
                break;
            }
        }
        if ($random == "I") {
            if (!isset($_SESSION["espacio22"]) && !isset($_SESSION["espacio22bot"])) {
                $_SESSION["espacio22bot"] = 9;
                $xd = 1;
                break;
            }
        }
        $tiro = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gato|Examen</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/fontawesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .boton {
        width: 130px;
        height: 130px;
        background-color: black;
    }

    .botonF {
        width: 100px;
        height: 50px;
        border-radius: 15px;
        background-color: green;
        color: white;
        border: black;
    }

    .boton01 {
        width: 130px;
        height: 130px;
        background-image: url("./img/x.png");
        /* background-color: blue; */
    }

    .boton02 {
        width: 130px;
        height: 130px;
        background-image: url("./img/O.png");
        /*background-color: red;*/
    }

    /* .boton:focus {
            background-color: aqua;
        } */
    .card {
        position: absolute;
        bottom: 200px;
        align-items: center;
        right: 500px;
    }
</style>

<body>



    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="gato.php">Gato</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link">Braquetes lópez Edgar Rodolfo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">T-502</a>
                </li>
            </ul>
        </div>
        <a href="./controllers/restart.php"><button class="btn btn-dark my-2 my-sm-0"><i class="fa fa-redo"></i></button></a>
        <a href="./controllers/logout.php"><button class="btn btn-dark my-2 my-sm-0"><i class="fa fa-sign-out"></i></button></a>
    </nav>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 offset-4 p-4">

                    <table cellspacing="60" border="3">
                        <tr>
                            <td>
                                <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                                    <input type="hidden" name="espacio00" value="<?php echo $matriz[0][0] = "-"; ?>">
                                    <?php if (!isset($_SESSION["espacio00"]) && !isset($_SESSION["espacio00bot"])) { ?>
                                        <button type="submit" class="boton"></button>
                                    <?php   }    ?>
                                    <?php if (isset($_SESSION["espacio00"])) { ?>
                                        <button type="submit" class="boton01" disabled></button>
                                    <?php } else ?>
                                    <?php if (isset($_SESSION["espacio00bot"])) { ?>
                                        <button type="submit" class="boton02" disabled></button>
                                    <?php
                                    }
                                    ?>
                                </form>
                            </td>
                            <td>
                                <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                                    <input type="hidden" name="espacio01" value="<?php echo $matriz[0][1] = "-"; ?>">
                                    <?php if (!isset($_SESSION["espacio01"]) && !isset($_SESSION["espacio01bot"])) { ?>
                                        <button type="submit" class="boton"></button>
                                    <?php   }    ?>
                                    <?php if (isset($_SESSION["espacio01"])) { ?>
                                        <button type="submit" class="boton01" disabled></button>
                                    <?php } else ?>
                                    <?php if (isset($_SESSION["espacio01bot"])) { ?>
                                        <button type="submit" class="boton02" disabled></button>
                                    <?php
                                    }
                                    ?>
                                </form>
                            </td>
                            <td>
                                <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                                    <input type="hidden" name="espacio02" value="<?php echo $matriz[0][2] = "-"; ?>">
                                    <?php if (!isset($_SESSION["espacio02"]) && !isset($_SESSION["espacio02bot"])) { ?>
                                        <button type="submit" class="boton"></button>
                                    <?php   }    ?>
                                    <?php if (isset($_SESSION["espacio02"])) { ?>
                                        <button type="submit" class="boton01" disabled></button>
                                    <?php } else ?>
                                    <?php if (isset($_SESSION["espacio02bot"])) { ?>
                                        <button type="submit" class="boton02" disabled></button>
                                    <?php
                                    }
                                    ?>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                                    <input type="hidden" name="espacio10" value="<?php echo $matriz[1][0] = "-"; ?>">
                                    <?php if (!isset($_SESSION["espacio10"]) && !isset($_SESSION["espacio10bot"])) { ?>
                                        <button type="submit" class="boton"></button>
                                    <?php   }    ?>
                                    <?php if (isset($_SESSION["espacio10"])) { ?>
                                        <button type="submit" class="boton01" disabled></button>
                                    <?php } else ?>
                                    <?php if (isset($_SESSION["espacio10bot"])) { ?>
                                        <button type="submit" class="boton02" disabled></button>
                                    <?php
                                    }
                                    ?>
                                </form>
                            </td>
                            <td>
                                <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                                    <input type="hidden" name="espacio11" value="<?php echo $matriz[1][1] = "-"; ?>">
                                    <?php if (!isset($_SESSION["espacio11"]) && !isset($_SESSION["espacio11bot"])) { ?>
                                        <button type="submit" class="boton"></button>
                                    <?php   }    ?>
                                    <?php if (isset($_SESSION["espacio11"])) { ?>
                                        <button type="submit" class="boton01" disabled></button>
                                    <?php } else ?>
                                    <?php if (isset($_SESSION["espacio11bot"])) { ?>
                                        <button type="submit" class="boton02" disabled></button>
                                    <?php
                                    }
                                    ?>
                                </form>
                            </td>
                            <td>
                                <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                                    <input type="hidden" name="espacio12" value="<?php echo $matriz[1][2] = "-"; ?>">
                                    <?php if (!isset($_SESSION["espacio12"]) && !isset($_SESSION["espacio12bot"])) { ?>
                                        <button type="submit" class="boton"></button>
                                    <?php   }    ?>
                                    <?php if (isset($_SESSION["espacio12"])) { ?>
                                        <button type="submit" class="boton01" disabled></button>
                                    <?php } else ?>
                                    <?php if (isset($_SESSION["espacio12bot"])) { ?>
                                        <button type="submit" class="boton02" disabled></button>
                                    <?php
                                    }
                                    ?>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                                    <input type="hidden" name="espacio20" value="<?php echo $matriz[2][0] = "-"; ?>">
                                    <?php if (!isset($_SESSION["espacio20"]) && !isset($_SESSION["espacio20bot"])) { ?>
                                        <button type="submit" class="boton"></button>
                                    <?php   }    ?>
                                    <?php if (isset($_SESSION["espacio20"])) { ?>
                                        <button type="submit" class="boton01" disabled></button>
                                    <?php } else ?>
                                    <?php if (isset($_SESSION["espacio20bot"])) { ?>
                                        <button type="submit" class="boton02" disabled></button>
                                    <?php
                                    }
                                    ?>
                                </form>
                            </td>
                            <td>
                                <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                                    <input type="hidden" name="espacio21" value="<?php echo $matriz[2][1] = "-"; ?>">
                                    <?php if (!isset($_SESSION["espacio21"]) && !isset($_SESSION["espacio21bot"])) { ?>
                                        <button type="submit" class="boton"></button>
                                    <?php   }    ?>
                                    <?php if (isset($_SESSION["espacio21"])) { ?>
                                        <button type="submit" class="boton01" disabled></button>
                                    <?php } else ?>
                                    <?php if (isset($_SESSION["espacio21bot"])) { ?>
                                        <button type="submit" class="boton02" disabled></button>
                                    <?php
                                    }
                                    ?>
                                </form>
                            </td>
                            <td>
                                <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                                    <input type="hidden" name="espacio22" value="<?php echo $matriz[2][2] = "-"; ?>">
                                    <?php if (!isset($_SESSION["espacio22"]) && !isset($_SESSION["espacio22bot"])) { ?>
                                        <button type="submit" class="boton"></button>
                                    <?php   }    ?>
                                    <?php if (isset($_SESSION["espacio22"])) { ?>
                                        <button type="submit" class="boton01" disabled></button>
                                    <?php } else ?>
                                    <?php if (isset($_SESSION["espacio22bot"])) { ?>
                                        <button type="submit" class="boton02" disabled></button>
                                    <?php
                                    }
                                    ?>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row" align="center">
                <div class="col-md-4">
                    <h4>Jugador: <?php echo $_SESSION["jugador"]; ?></h4>
                    <h4>Nivel: <?php echo $_SESSION["nivel"]; ?></h4>
                </div>
                <div class="col-md-4">
                    <h4>Partida: <?php echo $_SESSION["partida"]; ?></h4>
                    <h4>Ganadas: <?php echo $_SESSION["ganar"]; ?></h4>
                </div>
                <div class="col-md-4">
                    <h4>Perdidas: <?php echo $_SESSION["perder"]; ?></h4>
                    <h4>Empate: <?php echo $_SESSION["empate"]; ?></h4>
                </div>
            </div>
        </div>
    </div>


</body>

</html>

<?php
if (isset($_SESSION["espacio00"])) {
    $espacio[0][0] = $_SESSION["espacio00"];
}
if (isset($_SESSION["espacio01"])) {
    $espacio[0][1] = $_SESSION["espacio01"];
}
if (isset($_SESSION["espacio02"])) {
    $espacio[0][2] = $_SESSION["espacio02"];
}
if (isset($_SESSION["espacio10"])) {
    $espacio[1][0] = $_SESSION["espacio10"];
}
if (isset($_SESSION["espacio11"])) {
    $espacio[1][1] = $_SESSION["espacio11"];
}
if (isset($_SESSION["espacio12"])) {
    $espacio[1][2] = $_SESSION["espacio12"];
}
if (isset($_SESSION["espacio20"])) {
    $espacio[2][0] = $_SESSION["espacio20"];
}
if (isset($_SESSION["espacio21"])) {
    $espacio[2][1] = $_SESSION["espacio21"];
}
if (isset($_SESSION["espacio22"])) {
    $espacio[2][2] = $_SESSION["espacio22"];
}

if (isset($_SESSION["espacio00bot"])) {
    $espaciobot[0][0] = $_SESSION["espacio00bot"];
}
if (isset($_SESSION["espacio01bot"])) {
    $espaciobot[0][1] = $_SESSION["espacio01bot"];
}
if (isset($_SESSION["espacio02bot"])) {
    $espaciobot[0][2] = $_SESSION["espacio02bot"];
}
if (isset($_SESSION["espacio10bot"])) {
    $espaciobot[1][0] = $_SESSION["espacio10bot"];
}
if (isset($_SESSION["espacio11bot"])) {
    $espaciobot[1][1] = $_SESSION["espacio11bot"];
}
if (isset($_SESSION["espacio12bot"])) {
    $espaciobot[1][2] = $_SESSION["espacio12bot"];
}
if (isset($_SESSION["espacio20bot"])) {
    $espaciobot[2][0] = $_SESSION["espacio20bot"];
}
if (isset($_SESSION["espacio21bot"])) {
    $espaciobot[2][1] = $_SESSION["espacio21bot"];
}
if (isset($_SESSION["espacio22bot"])) {
    $espaciobot[2][2] = $_SESSION["espacio22bot"];
}


if (isset($espacio[0][0]) && isset($espacio[0][1]) && isset($espacio[0][2])) {
    $matriz[0][0] = "X";
    $matriz[0][1] = "X";
    $matriz[0][2] = "X";
    $ganador = $_SESSION["jugador"];
    $message = "Juego terminado linea 1 horizontal";
    alert($message, $matriz, $ganador);
} else if (isset($espacio[1][0]) && isset($espacio[1][1]) && isset($espacio[1][2])) {
    $matriz[1][0] = "X";
    $matriz[1][1] = "X";
    $matriz[1][2] = "X";
    $ganador = $_SESSION["jugador"];
    $message = "Juego terminado linea 2 horizontal";
    alert($message, $matriz, $ganador);
} else if (isset($espacio[2][0]) && isset($espacio[2][1]) && isset($espacio[2][2])) {
    $matriz[2][0] = "X";
    $matriz[2][1] = "X";
    $matriz[2][2] = "X";
    $ganador = $_SESSION["jugador"];
    $message = "Juego terminado linea 3 horizontal";
    alert($message, $matriz, $ganador);
} else if (isset($espacio[0][0]) && isset($espacio[1][0]) && isset($espacio[2][0])) {
    $matriz[0][0] = "X";
    $matriz[1][0] = "X";
    $matriz[2][0] = "X";
    $ganador = $_SESSION["jugador"];
    $message = "Juego terminado linea 1 vetical";
    alert($message, $matriz, $ganador);
} else if (isset($espacio[0][1]) && isset($espacio[1][1]) && isset($espacio[2][1])) {
    $matriz[0][1] = "X";
    $matriz[1][1] = "X";
    $matriz[2][1] = "X";
    $ganador = $_SESSION["jugador"];
    $message = "Juego terminado linea 2 vertical";
    alert($message, $matriz, $ganador);
} else if (isset($espacio[0][2]) && isset($espacio[1][2]) && isset($espacio[2][2])) {
    $matriz[0][2] = "X";
    $matriz[1][2] = "X";
    $matriz[2][2] = "X";
    $ganador = $_SESSION["jugador"];
    $message = "Juego terminado linea 3 vertical";
    alert($message, $matriz, $ganador);
} else if (isset($espacio[0][0]) && isset($espacio[1][1]) && isset($espacio[2][2])) {
    $matriz[0][0] = "X";
    $matriz[1][1] = "X";
    $matriz[2][2] = "X";
    $ganador = $_SESSION["jugador"];
    $message = "Juego terminado diagonal \ ";
    alert($message, $matriz, $ganador);
} else if (isset($espacio[0][2]) && isset($espacio[1][1]) && isset($espacio[2][0])) {
    $matriz[0][2] = "X";
    $matriz[1][1] = "X";
    $matriz[2][0] = "X";
    $ganador = $_SESSION["jugador"];
    $message = "Juego terminado diagonal / ";
    alert($message, $matriz, $ganador);
} else 
if (isset($espaciobot[0][0]) && isset($espaciobot[0][1]) && isset($espaciobot[0][2])) {
    $matriz[0][0] = "O";
    $matriz[0][1] = "O";
    $matriz[0][2] = "O";
    $ganador = "El bot de Braquetes";
    $message = "Juego terminado linea 1 horizontal";
    alert($message, $matriz, $ganador);
} else if (isset($espaciobot[1][0]) && isset($espaciobot[1][1]) && isset($espaciobot[1][2])) {
    $matriz[1][0] = "O";
    $matriz[1][1] = "O";
    $matriz[1][2] = "O";
    $message = "Juego terminado linea 2 horizontal";
    $ganador = "El bot de Braquetes";
    alert($message, $matriz, $ganador);
} else if (isset($espaciobot[2][0]) && isset($espaciobot[2][1]) && isset($espaciobot[2][2])) {
    $matriz[2][0] = "O";
    $matriz[2][1] = "O";
    $matriz[2][2] = "O";
    $ganador = "El bot de Braquetes";
    $message = "Juego terminado linea 3 horizontal";
    alert($message, $matriz, $ganador);
} else if (isset($espaciobot[0][0]) && isset($espaciobot[1][0]) && isset($espaciobot[2][0])) {
    $matriz[0][0] = "O";
    $matriz[1][0] = "O";
    $matriz[2][0] = "O";
    $ganador = "El bot de Braquetes";
    $message = "Juego terminado linea 1 vetical";
    alert($message, $matriz, $ganador);
} else if (isset($espaciobot[0][1]) && isset($espaciobot[1][1]) && isset($espaciobot[2][1])) {
    $matriz[0][1] = "O";
    $matriz[1][1] = "O";
    $matriz[2][1] = "O";
    $ganador = "El bot de Braquetes";
    $message = "Juego terminado linea 2 vertical";
    alert($message, $matriz, $ganador);
} else if (isset($espaciobot[0][2]) && isset($espaciobot[1][2]) && isset($espaciobot[2][2])) {
    $matriz[0][2] = "O";
    $matriz[1][2] = "O";
    $matriz[2][2] = "O";
    $ganador = "El bot de Braquetes";
    $message = "Juego terminado linea 3 vertical";
    alert($message, $matriz, $ganador);
} else if (isset($espaciobot[0][0]) && isset($espaciobot[1][1]) && isset($espaciobot[2][2])) {
    $matriz[0][0] = "O";
    $matriz[1][1] = "O";
    $matriz[2][2] = "O";
    $ganador = "El bot de Braquetes";
    $message = "Juego terminado diagonal \ ";
    alert($message, $matriz, $ganador);
} else if (isset($espaciobot[0][2]) && isset($espaciobot[1][1]) && isset($espaciobot[2][0])) {
    $matriz[0][2] = "O";
    $matriz[1][1] = "O";
    $matriz[2][0] = "O";
    $ganador = "El bot de Braquetes";
    $message = "Juego terminado diagonal / ";
    alert($message, $matriz, $ganador);
} else
if (isset($espaciobot[0][0]) || isset($espacio[0][0])) {
    if (isset($espaciobot[0][1]) || isset($espacio[0][1])) {
        if (isset($espaciobot[0][2]) || isset($espacio[0][2])) {
            if (isset($espaciobot[1][0]) || isset($espacio[1][0])) {
                if (isset($espaciobot[1][1]) || isset($espacio[1][1])) {
                    if (isset($espaciobot[1][2]) || isset($espacio[1][2])) {
                        if (isset($espaciobot[2][0]) || isset($espacio[2][0])) {
                            if (isset($espaciobot[2][1]) || isset($espacio[2][1])) {
                                if (isset($espaciobot[2][2]) || isset($espacio[2][2])) {
                                    $ganador = "Empate";
                                    $message = "Partida terminado en empate";
                                    alert($message, $matriz, $ganador);
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}

?>
<script type="text/javascript">
    function ConfirmDemo() {
        //Ingresamos un mensaje a mostrar
        var mensaje = confirm("¿Quieres jugar de nuevo?");
        //Detectamos si el usuario acepto el mensaje
        if (mensaje) {
            window.location.href = "./controllers/continue.php";
        }
        //Detectamos si el usuario denegó el mensaje
        else {
            window.location.href = "./controllers/logout.php";
        }
    }
</script>
<?php
function alert($message, $matriz, $ganador)
{
?>
    <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
        <div class="card-header"><?php echo $message; ?></div>
        <div class="card-header">Ganó: <?php echo $ganador; ?></div>
        <div class="card-body" align="center">
            <table>
                <tr>
                    <td><?php echo $matriz[0][0]; ?>|</td>
                    <td><?php echo $matriz[0][1]; ?>|</td>
                    <td><?php echo $matriz[0][2]; ?></td>
                </tr>
                <tr>
                    <td> <?php echo $matriz[1][0]; ?>|</td>
                    <td> <?php echo $matriz[1][1]; ?>|</td>
                    <td> <?php echo $matriz[1][2]; ?></td>
                </tr>
                <tr>
                    <td> <?php echo $matriz[2][0]; ?>|</td>
                    <td> <?php echo $matriz[2][1]; ?>|</td>
                    <td> <?php echo $matriz[2][2]; ?></td>
                </tr>
            </table>
            <button class="botonF" onclick="ConfirmDemo()">Opciones</button>
        </div>
    </div>
<?php
    $_SESSION["dato_ganador"] = $ganador;
}
?>