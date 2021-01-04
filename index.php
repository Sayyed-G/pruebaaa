<?php
use App\Clases\Facultad as Facultad;
include_once "includes/autoload.php";
include_once "includes/logger.php"; // identificarse

include_once "App/vistas/layout/header.php";

 $request = $_SERVER["QUERY_STRING"];

 switch ($request) {
 	case 'bienvenido':
 	     include_once "App/vistas/bienvenido.php"; // mi opcio de elias 
 	     break;
 	case 'crear-usuario':
 		 include_once "App/vistas/uCrear.php";
 		break;
    case 'crear-plan-estudio';
        include_once "App/vistas/planCrear.php";
 	    break;
 	case 'asignar-cursos';
        include_once "App/vistas/cursosAsignar.php";
 	    break;
 	case 'estudiantes';
        include_once "App/vistas/RepEstudiantes.php";
 	    break;
 	case 'facultad';
        include_once "App/vistas/RepFacultad.php";
 	    break;
    case "api/estudiantes":
          $metodo = $_SERVER["REQUEST_METHOD"];
            $controladorUsuario = new ControladorUsuario();
        if ($metodo == "GET") {

            $resultados = $controladorUsuario->mostrarEstudiantes();
            $estudiantes[] = null;

            foreach ($resultados as $key => $estudiante) {
                $estudiantes[$key] = array(
                    "nombres" => $estudiante["nombres"],
                    "apellidos" => $estudiante["apellidos"]
                );
            }
            echo json_encode($estudiantes);
        }
            if ($metodo == "POST"){
                $nombres = $_POST["nombres"];
                $apellidos= $_POST["apellidos"];
                $codigo = (int)$_POST["codigo"];
                $password = $_POST["password"];
                $tipo = $_POST["tipo"];
               $resultado = $controladorUsuario->crearUsuario($nombres,$apellidos,$codigo, $password, $tipo);
                if ($resultado == "Guardado"){
                    echo json_encode(array(
                        "codigo"=>"200",
                        "status"=>"error"
                    ));
                }else{
                    echo json_encode(array(
                        "codigo" => "500",
                        "status" => "error"
                    ));
                }
               
            }

 	default:
 		echo 'No existe información';
 		break;
 }  

include_once "App/vistas/layout/footer.php";






