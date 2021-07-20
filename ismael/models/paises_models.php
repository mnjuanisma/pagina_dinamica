<?php

$query = "SELECT * FROM country WHERE country LIKE '%%'";

$resultado = mysqli_query($conexion, $query);
