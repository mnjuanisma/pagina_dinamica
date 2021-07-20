<?php
# Este se considera un controlador

require_once "conexion.php";
require_once "models/actores_models.php";


$pagina = "Actores";

$nombre = $_GET['nombre'] ?? "";



# incluir la vista
require_once 'vistas/actores_vistas.php';