<?php
require_once 'vendor/autoload.php';
require_once 'src/Model/usuarios.php';

use App\Model\Usuario;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $apellido = $_POST['apellido'] ?? '';
    $email = $_POST['email'] ?? '';
    $clave = $_POST['clave'] ?? '';

    $usuario = new Usuario($nombre, $apellido, $email, $clave);

    echo "Nombre: " . htmlspecialchars($usuario->getNombre()) . "<br>";
    echo "Apellido: " . htmlspecialchars($usuario->getApellido()) . "<br>";
    echo "Email: " . htmlspecialchars($usuario->getEmail()) . "<br>";
    echo "Clave: " . htmlspecialchars($usuario->getClave()) . "<br>";
}
?>