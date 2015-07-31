<?php
session_start();

include '../model/connect.php';
include '../model/product.php';
include '../model/customer.php';

if (isset($_POST["action"]))
    $action = $_POST["action"];
elseif (isset($_GET["action"]))
    $action=$_GET["action"];
else
    $action="home";

switch($action){
    case "home":
        include '../view/home.php';
        break;
    case "acc_login_form":
        session_destroy();
        include '../view/acc_login.php';
        break;
    case "register_form":
        include '../view/register.php';
        break;
    case "register":
       
        $name = $_POST['name'];
        $age = $_POST['age'];
        $mail = $_POST['email'];
        $pass = $_POST['pass'];
        $address = $_POST['address'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $code = $_POST['code'];
        $phone = $_POST['phone'];
        

        $add = new customer(Null, $name, $age, $mail, $pass, $address, $country, $city, $code, $phone);
        $result = $add->insert();
        header("location:?action=acc_login_form");
        break;
    case "acc_login":
        $User = $_POST["email"];
        $Pass = $_POST["password"];
        $ad = new customer();
        $ar = $ad->login($User, $Pass);
        if ($ar[0] == 0) {
            echo "Login Failed";
            include ("../view/login_order.php");
        } else if ($ar[0] == 1) {
            $_SESSION["\/m&coppy;fptp$02241"] = $ar[1];
            include ("../view/home.php");
        } else {
            include ("../view/login_order.php");
        }
        break;
    case "logout":
        session_destroy();
        include "../view/acc_login.php";
        break;
}
?>
