<?php

include_once 'models/Product.php';

class Crudmodel extends Model{
    
    public function __constuct(){
        parent::__constuct();
    }

    public function get(){
        $items =[];

        try{
            $query = $this->db->connect()->query("SELECT * FROM producto");
            while($row = $query->fetch()){
                $item = new Product();
                $item->prod_codigo = $row['prod_codigo'];
                $item->prod_nombre = $row['prod_nombre'];
                $item->prod_precio = $row['prod_precioVenta'];
                $item->prod_stock = $row['prod_Stock'];
                $item->prod_descrip = $row['prod_descripcion'];

                array_push($items, $item);
            }

            return $items;
        }catch(PDOException $e){
            return[];
        }
    }

    public function insert($datos) {
        try {
            // Preparar las consultas para ambas bases de datos
            $queryFDB = $this->db->connectDatabases(constant('FDB'))->prepare("INSERT INTO producto (prod_codigo, prod_nombre, prod_precioVenta, prod_Stock, prod_descripcion) VALUES (:prod_cod, :prod_nombre , :prod_precio, :prod_stock, :prod_descrip)");
            $querySDB = $this->db->connectDatabases(constant('SDB'))->prepare("INSERT INTO producto (prod_codigo, prod_nombre, prod_precioVenta, prod_Stock, prod_descripcion) VALUES (:prod_cod, :prod_nombre , :prod_precio, :prod_stock, :prod_descrip)");
    
            // Ejecutar las consultas para base datos 1
            $queryFDB->execute(['prod_cod' => $datos['prod_cod'], 'prod_nombre' => $datos['prod_nombre'], 'prod_precio' => $datos['prod_precio'], 'prod_stock' => $datos['prod_stock'], 'prod_descrip' => $datos['prod_descrip']]);
            
            // Verificar si la inserción en FDB (first database) fue exitosa
            if (!$queryFDB->rowCount()) {
                throw new PDOException('Error al insertar en la primera base');
            }

              // Ejecutar las consultas para base datos 2
            $querySDB->execute(['prod_cod' => $datos['prod_cod'], 'prod_nombre' => $datos['prod_nombre'], 'prod_precio' => $datos['prod_precio'], 'prod_stock' => $datos['prod_stock'], 'prod_descrip' => $datos['prod_descrip']]);
            
            // Verificar si la inserción en (second database) fue exitosa
            if (!$querySDB->rowCount()) {
                throw new PDOException('Error al insertar en la segunda base');
            }
    
            return 'Inserción exitosa en ambas bases de datos.';
        } catch(PDOException $e) {
            // Retornar el mensaje de error para que el controlador lo maneje
            return $e->getMessage();
        }
    }
    
    
    

    
}
?>