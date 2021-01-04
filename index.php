<?php

    require_once('controllers/animales.controller.php');
    require_once('models/animales.model.php');

?>


<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="assets/js/jquery-3.5.1.min.js">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>

      <?php

         $animales= AnimalesController::ctrObtenerAnimales();

     ?>

        <div class="row mt-3">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">NOMBRE</th>
                                <th scope="col">PESO</th>
                                <th scope="col">ACCION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                    $i = 1;
                                    foreach ($animales as $key => $value){

                                        echo '<tr>
                                                <th>'.$i.'</th>
                                                <td>'.$value->nombre.'</td>
                                                <td>'.$value->peso.'</td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-info btnObtenerDatosIndividuales"
                                                                data-id="'.$value->id.'">
                                                            <i class="far fa-eye"></i>
                                                         </button>
                                                        <button type="button" class="btn btn-warning">  
                                                            <i class="far fa-edit"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-danger">
                                                            <i class="far fa-times-circle"></i>
                                                        </button>
                                                    </div>                                        
                                                </td>
                                              </tr>';
                                            $i++;
                                    }                               
                                ?>                    
                            </tr>
                        </tbody>
                    </table>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-2"></div>
        </div>

        <script src="./assets/js/animales.js"></script>
</body>
</html>