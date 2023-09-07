<link rel="stylesheet" type="text/css" href="styles.css">
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesa las respuestas del usuario
    $res1 = $_POST['p1'];
    $res2 = $_POST['p2'];
    $res3 = $_POST['p3'];
    $res4 = $_POST['p4'];
    $res5 = $_POST['p5'];

    // Calcula la puntuación (puedes personalizar tu lógica aquí)
    $puntos = 0;
    if ($res1 === 'b') {
        $puntos++;
    }
    if ($res2 === 'b') {
        $puntos++;
    }
    if ($res3 === 'a') {
        $puntos++;
    }
    if ($res4 === 'a') {
        $puntos++;
    }
    if ($res5 === 'c') {
        $puntos++;
    }

    // Muestra los resultados
    echo "<div class='resultado'>";
    echo "<h1>Resultado</h1>";
    echo "<p class='punt'>Puntuación: $puntos/5</p>";
    echo "<a href='index.html'>
    <input type='submit' value='Internar de nuevo'>
    </a>";
    echo "</div>";
}
?>
