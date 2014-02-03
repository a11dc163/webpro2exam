<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
try{
$pdo = new PDO('mysql:host=localhost; dbname=webpro2db',  'root', '');       
}catch(PDOException $e){
    var_dump($e->getMessage());
    exit;
}



class Product{
    
    public function all(){
        $sql = "select * from products";
        $stmt = $pdo->query($sql);
        
        
        
        
    }
    
    public function load(){
        
    }
}

$pdo = null;
?>
