<?php

class product {
    var $id;
    var $name;
    var $price;
    var $category;
    var $image;
    
    function __construct() {
        if(func_num_args()==5){
            $this -> id =  func_get_arg(0);
            $this -> name = func_get_arg(1);
            $this -> price = func_get_arg(2);
            $this -> category = func_get_arg(3);
            $this -> image = func_get_arg(4);
        }
    }
    
    public function getList(){
        $db = new connect();
        $strQuery = "SELECT * FROM product";
        $kq = $db->getlist($strQuery);
        return $kq;
    }
    
    public function getProductByCategr($categr){
        $db = new connect();
        $strQuery = "SELECT * FROM product WHERE category = '$categr'";
        $kq = $db ->getInstance($strQuery);
        return $kq;
    }
    
    public function insert(){
        $db = new connect();
        $strQuery = "INSERT INTO product VALUES('$this->id', '$this->name', '$this->price',
        '$this->category', '$this->image')";
        $db->exec($strQuery);
    }
    
    public function update(){
        $db = new connect();
        $strQuery = "UPDATE product SET name='$this->name',price='$this->price',category='$this->category',
        img='$this->image' WHERE Id='$this->id'";
        $db->exec($strQuery);
    }
    
    public function delete(){
        $db = new connect();
        $strQuery = "DELETE FROM product WHERE name = '$this->name'";
        $db->exec($strQuery);
    }
}

?>
