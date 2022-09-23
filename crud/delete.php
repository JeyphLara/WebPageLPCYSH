<?php

include("conex.php");
$con=conectarsebd();

$Numero_documento=$_POST['id'];

$sql="DELETE FROM pre_inscripcion  WHERE Numero_documento='$Numero_documento'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("location:integrante.php");
    }
?>