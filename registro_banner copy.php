<?php
    if(isset($_POST['nombre']) && trim($_POST['nombre'])){
        $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
        echo "Nombre digitado: ".$nombre;
    }else{
        echo "No hay mensaje";
    }

    if(isset($_POST['description']) && trim($_POST['description'])){
        $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
        echo "Drescripción digitada: ".$description;
    }else{
        echo "No hay mensaje";
    }

    if(isset($_POST['posicion']) && trim($_POST['posicion'])){
        $posicion = filter_var($_POST['posicion'], FILTER_SANITIZE_STRING);
        echo "Posicion digitado: ".$posicion;
    }else{
        echo "No hay mensaje";
    }

    if(isset($_POST['seccion']) && trim($_POST!= "seccion"){
        $area =$_POST['seccion'];
        switch ($area) {
            case 'slide_index':
                echo "Usted selecciono slide_index";
                break;
            case 'admisiones':
                echo "Usted selecciono admisiones";
                break;
            case 'matriculas':
                echo "Usted selecciono matriculas";
                break;
            case 'galeria':
                echo "Usted selecciono galeria";
                break;
            case 'cronograma':
                echo "Usted selecciono cronograma";
                break;
            case 'horario_jardin':
                echo "Usted selecciono horario_jardin";
                break;
            case 'horario_prejardin':
                    echo "Usted selecciono horario_prejardin";
                break; 
            case 'horario_parvulos':
                    echo "Usted selecciono horario_parvulos";
                break;           
            default:
                echo "Opción no válida";
                break;
        }
    }else{
        echo "No seleccionó ninguna sección";
    }
?>