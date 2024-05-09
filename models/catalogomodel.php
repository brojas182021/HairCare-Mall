<?php

include_once 'models/Product.php';

class catalogoModel extends Model{
    
    public function __constuct(){
        parent::__constuct();
    }

    public function getProducts(){
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
}
?>