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

    public function deleteById($id) {

        try {
            // Preparar las consultas para ambas bases de datos
            $queryFDB = $this->db->connectDatabases(constant('FDB'))->prepare("DELETE FROM producto WHERE prod_codigo = :prod_cod");
            $querySDB = $this->db->connectDatabases(constant('SDB'))->prepare("DELETE FROM producto WHERE prod_codigo = :prod_cod");
    
            // Ejecutar las consultas para base datos 1
            $queryFDB->execute(['prod_cod' => $id]);
            
            // Verificar si la inserción en FDB (first database) fue exitosa
            if (!$queryFDB->rowCount()) {
                throw new PDOException('Error al insertar en la primera base');
            }

              // Ejecutar las consultas para base datos 2
            $querySDB->execute(['prod_cod' => $id]);
            
            // Verificar si la inserción en (second database) fue exitosa
            if (!$querySDB->rowCount()) {
                throw new PDOException('Error al insertar en la segunda base');
            }
    
            return 'Se eliminó el registro correctamente.';
        } catch(PDOException $e) {
            // Retornar el mensaje de error para que el controlador lo maneje
            return $e->getMessage();
        }
    }

    public function getById($id){
        $item = new Product();

        $queryFDB = $this->db->connectDatabases(constant('FDB'))->prepare("SELECT* FROM producto WHERE prod_codigo = :prod_codigo");
        try{
            $queryFDB->execute(['prod_codigo'=> $id]);
            

            while($row = $queryFDB->fetch()){
                
                $item->prod_codigo = $row['prod_codigo'];
                $item->prod_nombre = $row['prod_nombre'];
                $item->prod_precio = $row['prod_precioVenta'];
                $item->prod_stock = $row['prod_Stock'];
                $item->prod_descrip = $row['prod_descripcion'];

            }

            return $item;

        }catch(PDOException $e){
            return null;
        }
    }
    public function update($item){
        $queryFDB = $this->db->connectDatabases(constant('FDB'))->prepare("UPDATE producto SET  prod_nombre= :prod_nombre, prod_precioVenta = :prod_precio, prod_Stock = :prod_stock, prod_descripcion = :prod_descrip WHERE prod_codigo= :prod_cod");
        $querySDB = $this->db->connectDatabases(constant('SDB'))->prepare("UPDATE producto SET  prod_nombre= :prod_nombre, prod_precioVenta = :prod_precio, prod_Stock = :prod_stock, prod_descripcion = :prod_descrip WHERE prod_codigo= :prod_cod");
        try{
            $queryFDB->execute([
                'prod_cod' => $item['prod_codigo'],
                'prod_nombre' => $item['prod_nombre'],
                'prod_precio' => $item['prod_precioVenta'],
                'prod_stock' => $item['prod_Stock'],
                'prod_descrip' => $item['prod_descripcion']
            ]);
            $querySDB->execute([
                'prod_cod' => $item['prod_codigo'],
                'prod_nombre' => $item['prod_nombre'],
                'prod_precio' => $item['prod_precioVenta'],
                'prod_stock' => $item['prod_Stock'],
                'prod_descrip' => $item['prod_descripcion']
            ]);
            return 'Producto actualizado';
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
    
    //metodo para insertar datos sin importar el fallo en alguna de las BBDD
    // public function insert($datos) {
    //     try {
    //         // Preparar la consulta para la primera base de datos
    //         $queryFDB = $this->db->connectDatabases(constant('FDB'))->prepare("INSERT INTO producto (prod_codigo, prod_nombre, prod_precioVenta, prod_Stock, prod_descripcion) VALUES (:prod_cod, :prod_nombre , :prod_precio, :prod_stock, :prod_descrip)");
            
    //         // Ejecutar la consulta para la primera base de datos
    //         $queryFDB->execute(['prod_cod' => $datos['prod_cod'], 'prod_nombre' => $datos['prod_nombre'], 'prod_precio' => $datos['prod_precio'], 'prod_stock' => $datos['prod_stock'], 'prod_descrip' => $datos['prod_descrip']]);
            
    //         // Verificar si la inserción en FDB fue exitosa
    //         if (!$queryFDB->rowCount()) {
    //             throw new PDOException('Error al insertar en la primera base');
    //         }
            
    //         // Preparar la consulta para la segunda base de datos
    //         $querySDB = $this->db->connectDatabases(constant('SDB'))->prepare("INSERT INTO producto (prod_codigo, prod_nombre, prod_precioVenta, prod_Stock, prod_descripcion) VALUES (:prod_cod, :prod_nombre , :prod_precio, :prod_stock, :prod_descrip)");
            
    //         // Ejecutar la consulta para la segunda base de datos
    //         $querySDB->execute(['prod_cod' => $datos['prod_cod'], 'prod_nombre' => $datos['prod_nombre'], 'prod_precio' => $datos['prod_precio'], 'prod_stock' => $datos['prod_stock'], 'prod_descrip' => $datos['prod_descrip']]);
            
    //         // Verificar si la inserción en SDB fue exitosa
    //         if (!$querySDB->rowCount()) {
    //             throw new PDOException('Error al insertar en la segunda base');
    //         }
    
    //         return 'Inserción exitosa en ambas bases de datos.';
    //     } catch(PDOException $e) {
    //         // Retornar el mensaje de error para que el controlador lo maneje
    //         return $e->getMessage();
    //     } catch(Exception $ex) {
    //         // Retornar mensaje específico para error de nombre de base de datos
    //         return 'Error al conectar con la base de datos: ' . $ex->getMessage();
    //     }
    // }
    
    
    

    
}
?>