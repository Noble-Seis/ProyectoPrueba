<?php

$rut = "";
$usuario = "";
$nombre = "";
$clave = "";
$repite_clave = "";
$direccion = "";
$region = "";
$comuna = "";

if(isset($_POST['rut'])){
    $rut = $_POST['rut'];
}
if(isset($_POST['usuario'])){
    $usuario = $_POST['usuario'];
}
if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
}
if(isset($_POST['clave'])){
    $clave = $_POST['clave'];
}
if(isset($_POST['repite_clave'])){
    $repite_clave = $_POST['repite_clave'];
}
if(isset($_POST['direccion'])){
    $direccion = $_POST['direccion'];
}
if(isset($_POST['region'])){
    $region = $_POST['region'];
}
if(isset($_POST['comuna'])){
    $comuna = $_POST['comuna'];
}

echo "<h2>Datos del Usuario Registrado</h2>";
echo "<br>";
echo "<h2>Rut: ".$rut."</h2>";
echo "<h2>Usuario: ".$usuario."</h2>";
echo "<h2>Nombre: ".$nombre."</h2>";
echo "<h2>Clave: ".$clave."</h2>";
echo "<h2>Direccion: ".$direccion."</h2>";
echo "<h2>Region: ".$region."</h2>";
echo "<h2>Comuna: ".$comuna."</h2>";
