<?php
require_once 'src/Domain/Usuario.php';
require_once 'src/Domain/Contrato.php';

// Crear un usuario
$usuario = new Usuario(1, "clave123", "Juan", "Empleado");

// Crear un contrato
$contrato = new Contrato(
    1,
    "2025-01-01",
    "2025-02-01",
    "2025-12-31",
    "MiEmpresa",
    "Juan",
    "Desarrollar software",
    5000000,
    "Mensual"
);

// Mostrar resultados
echo "Usuario: " . $usuario->nombre . " con rol " . $usuario->rol . "<br>";
echo "Contrato en empresa: " . $contrato->empresa . " por " . $contrato->monto . " COP";
