<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","roles");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']==1){ //ADMINISTRADOR
    header("location:pages/administrador/administrador.php");

}else
if($filas['id_cargo']==2){ //DOCENTE
header("location:pages/docente/docente.php");
}else
if($filas['id_cargo']==3){ //ACUDIENTE
header("location:pages/acudiente/acudiente.php");
}else
if($filas['id_cargo']==4){ //ESTUDIANTE
header("location:pages/estudiante/estudiante.php");
}
else{
    ?>
    <?php
    
    include("home.php");
    
    ?>
<h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
