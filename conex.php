    <?php
    
    function conectarse(){
        $cons_usuario="root";
        $cons_contra="";
        $cons_base_datos="laboratorio_de_paz";
        $cons_equipo="localhost";
        
        $obj_conexion = mysqli_connect($cons_equipo,$cons_usuario,$cons_contra,$cons_base_datos);
        if(!$obj_conexion)
        {
            ?>
            <script >
            alert("Verifique sus datos, no se pudo enviar la informacion si vuelve a  pasar comuniquese con el Laboratorio de paz...");
          </script>
       <?php
        }
        else
        {?>
         <?php
    include("index.html");
    ?>
       <script >
      alert("Sus datos han sido enviados correctamente, pronto nos comunicaremos con usted!");
    </script>
       <?php  }

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
 