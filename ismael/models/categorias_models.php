<?php

$query = "SELECT * FROM category WHERE name LIKE '%%'";

$resultado = mysqli_query($conexion, $query);
