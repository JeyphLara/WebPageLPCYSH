<?php
echo ("<br>");

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$tdocumento=$_POST['tdocumento'];
$ndocumento= $_POST['ndocumento'];
$correo=$_POST['correo'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$celular=$_POST['celular'];
$ciudades=$_POST['ciudades'];
$fechaIngreso= $_POST['fechaIngreso'];
$tipodoc="";
$sex="";
   include("conex.php");
   if($tdocumento=="a"){
       $tipodoc="TI";
    }elseif($tdocumento=="i"){
          $tipodoc="CC";
        }
    if($sexo=="a"){
        $sex="Masculino";
    }elseif($sexo=="i"){
        $sex="Femenino";
        }
$link=conectarse(); #conexion a la base de datos

$var_consulta= "INSERT INTO pre_inscripcion VALUES ('$fechaIngreso','$nombres','$apellidos','$tipodoc','$ndocumento','$correo','$edad','$sex','$celular','$ciudades')"; # aqui se define la sentencia esta es permite enviar datos
#$var_consulta= insert into pre_inscripcion values("04/04/2022","juanito alimaña","perez lara","CC",1004615601,"juanito@gmail.com",29,"Masculino",1111111111,"cali");
$link->query($var_consulta);#query es una operacion que se hace en la base de datos y se guarda en $var_consulta y le indica que me haga 
?>