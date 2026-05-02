<?php
require "vendor/autoload.php"; //se activa el autoload

use App\Canino\Perro; //se importan las clases, aun no se cargam
use App\Felino\Gato;

$opcion = $_GET['opcion'] ?? null; //aqui se obtiene la selecion del usuario 1 o 2

?>

<!DOCTYPE html>

<html>
<head>
    <title>Animales</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<h1>Elige un animal</h1>

<form method="GET"> 
    <button name="opcion" value="1">Perro</button>
    <button name="opcion" value="2">Gato</button>
</form>

<div class="resultado"> 

<?php //se evalua
if ($opcion) {
    switch ($opcion) {
        case "1":
            $animal = new Perro(); //llama a la clase
            echo $animal->hacerSonido(); //carga el archivo
            break;                //automaticamente SOLO en ese momento

        case "2":
            $animal = new Gato();
            echo $animal->hacerSonido();
            break;

        default:
            echo "Opción no válida";
    }
}
?>
</div>

</body>
</html>