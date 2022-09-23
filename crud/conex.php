<?php
    
    function conectarse(){
        $cons_usuario="root";
        $cons_contra="";
        $cons_base_datos="laboratorio_de_paz";
        $cons_equipo="localhost";
        
        $obj_conexion = mysqli_connect($cons_equipo,$cons_usuario,$cons_contra,$cons_base_datos);
        if(!$obj_conexion)
        {
            echo "Verifique sus datos, no se pudo enviar la informacion";
            echo "verifique que todo este correcto, si vuelve a  pasar comuniquese con el Laboratorio de paz...";
        }
        else
        {
            echo "Sus datos han sido enviados correctamente, pronto nos comunicaremos con usted!";
        }

        return $obj_conexion;
    }
    
    ?>
      <?php
    
    function conectarsebd(){
        $cons_usuario="root";
        $cons_contra="";
        $cons_base_datos="laboratorio_de_paz";
        $cons_equipo="localhost";
        
        $obj_conexion = mysqli_connect($cons_equipo,$cons_usuario,$cons_contra,$cons_base_datos);
        return $obj_conexion;
    }
    
    ?>
 