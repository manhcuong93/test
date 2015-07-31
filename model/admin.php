<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class admin {
    var $id = null;
    var $pass = null;
    
    public function __construct(){
        if(func_num_args() == 2){
            $this->id = func_get_arg(0);
            $this->pass = func_get_arg(1);
        }
    }
    
    public function login($tmpUser, $tmpPass){
        $db = new connect();
        $strQuery = "Select * from manage where admin = '$tmpUser'";
        $result = $db->getInstance($strQuery);
        $ketqua = array();
        if($result == null)
        {
            $ketqua[0] = 0;
            return $ketqua;
        }
        else
        {
            if(trim($result[1]) == trim($tmpPass)){
                $ketqua[0] = 1;
                $ketqua[1] = $result[0];
                return $ketqua;                
            }
            else{
                $ketqua[0] = 2;
                $ketqua[1] = $result[0];
                $ketqua[2] = $result[2];
                return $ketqua;
            }
        }
    }
}

?>
