<?php

class InicioSesionModel extends Model{
    
    public function __constuct(){
        parent::__constuct();
    }

    public function consultar($datos){
        $query = $this->db->connect()->prepare('SELECT * FROM usuario WHERE usua_nombre = :usuario AND usua_clave = :clave');
        $query->execute(['usuario' => $datos['usuario'] , 'clave' => $datos['clave']]);

        // Obtener los resultados de la consulta
        $resultados = $query->fetchAll(PDO::FETCH_ASSOC);

        // Verificar si se obtuvieron resultados
        if ($resultados) {
            echo "<script>  window.location.href ='". constant('URL') ."crud'; </script>";
        } else {
            echo "<script> alert('Credenciales incorrectas, por favor intenta nuevamente'); window.location.href = '" . constant('URL') ."inicioSesion'; </script>";
        }
    }
}
?>