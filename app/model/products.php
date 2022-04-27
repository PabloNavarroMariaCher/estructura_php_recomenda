<?php
require("../../config.php");
include(ROOT."app/_config/autoload.php");

class Products extends Connection{

    public function Products(){
        
        parent::__construct();
       
    }
    public function get_productos(){

        $sql = "SELECT * FROM USA_products_shopify where sku='100672ZM'";
        $sentencia=$this->connection_db->prepare($sql);
        $sentencia->execute(array());
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        return $resultado;
        $this->connection_db=null;
        
    }
    









}
$products= new Products;
$resultado=$products->get_productos();
var_dump($resultado);

