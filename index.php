<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gato|Examen</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">Gato</a>
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
    </nav>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 offset-3 p-3">

                    <form action="../Gato/controllers/userController.php" method="POST">
                        <fieldset align="center">
                            <legend>Legend</legend>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jugador:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nombre_jugador" placeholder="Escribe tu nombre" required maxlength="15">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <legend>Selecciona el nivel</legend>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="nivel" id="optionsRadios1" value="1" checked="">
                                    Nivel 1
                                </label>
                            </div>
                        </fieldset>
                        <fieldset align="center">
                            <button type="submit" class="btn btn-primary w-50">Submit</button>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="row">
            </div>
        </div>
    </div>


</body>

</html>

<?php



?>