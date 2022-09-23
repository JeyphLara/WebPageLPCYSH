<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

include('conex.php');
$conexion=mysqli_connect("localhost","root","","laboratorio_de_paz");
$consulta= "SELECT*FROM usuarios_cali WHERE Usuario='$usuario' and Contraseña='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
session_start();

if($filas){
    $_SESSION['usuario']=$usuario;
    header("location:../debate/indexF.php");
}else{
    ?>
    <?php
    include("login.html");
    ?>
       <script >
      alert("Error de autenticacion; si no eres admin no lo intentes de nuevo, o atente a las consecuencias legales!...");
    </script>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
