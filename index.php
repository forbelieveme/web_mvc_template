<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla</title>
</head>

<body>
    <h1>Hola Mundo</h1>
    <?php
    require_once "app/core/App.php";
    $recurso = $_REQUEST['url'];
    var_dump($recurso);
    echo 'Buscamos en ' . $recurso;
    $app = new App();
    ?>
</body>
</html>