<?php
require("../../config.php");
include(ROOT."app/_config/autoload.php");

class Products extends Connection{

    

    public function Products(){
        
        parent::__construct();
       
    }

    public function get_product($sku){

        $sql = "SELECT * FROM USA_products_shopify where sku='".$sku."'";
        $stmt=$this->connection_db->prepare($sql);
        $stmt->execute(array());
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $result;
        $this->connection_db=null;
        
    }

    public function get_all_products(){

        $sql = "SELECT * FROM USA_products_shopify";
        $stmt=$this->connection_db->prepare($sql);
        $stmt->execute(array());
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $result;
        $this->connection_db=null;
        
    }
    









}
$products= new Products;
$result=$products->get_all_products();

echo "<pre>";
var_dump($result);
echo "<pre>";
