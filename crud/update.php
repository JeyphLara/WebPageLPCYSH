<?php

include("conex.php");
$con=conectarsebd();

$Numero_documento=$_POST['ndocumento'];
$Nombres=$_POST['nombres'];
$Apellidos=$_POST['apellidos'];
$Tipo_documento=$_POST['tdocumento'];
$Correo=$_POST['correo'];
$Edad=$_POST['edad'];
$Sexo=$_POST['sexo'];
$Celular=$_POST['celular'];
$tabla=$_POST['tablas'];

$sql="UPDATE $tabla SET  Numero_documento='$Numero_documento',Nombres='$Nombres',Apellidos='$Apellidos', Tipo_documento='$Tipo_documento',Numero_documento='$Numero_documento',Correo='$Correo',Edad='$Edad', Sexo='$Sexo',Celular='$Celular' WHERE Numero_documento='$Numero_documento'";
$query=mysqli_query($con,$sql);

    if($query){

        Header("Location: ../sistema/admin.php");
    }
?>