<?php

$query = "SELECT * FROM language WHERE name LIKE '%%'";

$resultado = mysqli_query($conexion, $query);

