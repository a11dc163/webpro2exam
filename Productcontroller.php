<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Productcontroller
 *
 * @author taisei
 */

try{
$pdo = new PDO('mysql:host=localhost; dbname=webpro2db',  'root', '');       
}catch(PDOException $e){
    var_dump($e->getMessage());
    exit;
}



include(dirname(__FILE__) . '/Product.php');

class Productcontroller {
   
    
    public function indexAction(){
         $product = Product::all();
         include('views/index.php');
    }
    
}

?>
