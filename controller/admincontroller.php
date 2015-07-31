<?php

session_start();

include '../model/connect.php';
include '../model/product.php';
include '../model/customer.php';
include '../model/admin.php';



if (isset($_POST["action"]))
    $action = $_POST["action"];
elseif (isset($_GET["action"]))
    $action = $_GET["action"];
else
    $action = "admin";

switch ($action) {
    case "admin":
        if (isset($_SESSION["\/m&coppy;admin"])) {
            include ("../view/list_acc.php");
        } else {
            session_destroy();
            include '../view/admin_login.php';
        }
        break;
    case "list_pro":
        include '../view/list_pro.php';
        break;
    case "list_acc":
        include '../view/list_acc.php';
        break;
    case "add_pro_form":
        include '../view/insert_pro.php';
        break;
    case "update_pro_form":
        include '../view/update_pro.php';
        break;
    case "del_pro_form":
        include '../view/del_pro.php';
        break;
    case "add_acc_form":
        include '../view/insert_acc.php';
        break;
    case "update_acc_form":
        include '../view/update_acc.php';
        break;
    case "del_acc_form":
        include '../view/del_acc.php';
        break;
// add product
    case "add_pro":
        $path = getcwd() . DIRECTORY_SEPARATOR . 'images';


        if (isset($_FILES['img'])) {
            $filename = $_FILES['img']['name'];
            if (empty($filename)) {
                break;
            }
            $source = $_FILES['img']['tmp_name'];
            $target = $path . DIRECTORY_SEPARATOR . $filename;
            move_uploaded_file($source, $target);
        }


        $name = $_POST['name'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $img = $filename;

        $add = new product(NULL, $name, $price, $category, $img);
        $result = $add->insert();
        header("location:?action=list_pro");
        break;

// update product
    case "update_pro":
        $proid = $_POST['proid'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $categr = $_POST['categr'];
        $imga = $_POST['img1'];
        $imgb = $_POST['img2'];

        $n = new product($proid, $name, $price, $categr, $imga, $imgb);
        $result = $n->update();
        header("location:?action=list_pro");
        break;

// delete product
    case "del_pro":
        $proid = $_POST['proid'];

        $del = new product($proid, Null, Null, Null, Null, Null);
        $result = $del->delete();
        header("location:?action=list_pro");
        break;

// add customer
    case "add_acc":

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
        header("location:?action=list_acc");
        break;

// update customer
    case "update_acc":
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $mail = $_POST['email'];
        $pass = $_POST['pass'];
        $address = $_POST['address'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $code = $_POST['code'];
        $phone = $_POST['phone'];

        $n = new customer($id, $name, $age, $mail, $pass, $address, $country, $city, $code, $phone);
        $result = $n->update();
        header("location:?action=list_acc");
        break;

// delete customer
    case "del_acc":
        $id = $_POST['id'];

        $del = new customer($id, Null, Null, Null, Null, Null, Null, Null, Null, Null);
        $result = $del->delete();
        header("location:?action=list_acc");
        break;

    // login  
    case "login":
        $Id = $_POST["admin"];
        $Pass = $_POST["password"];
        $ad = new admin();
        $ar = $ad->login($Id, $Pass);
        if ($ar[0] == 0) {
            echo "Login Failed";
        } else if ($ar[0] == 1) {
            $_SESSION["\/m&coppy;admin"] = $ar[1];
            include ("../view/list_pro.php");
        } else {
            include ("../view/admin_login.php");
        }
        break;
    case "logout":
        session_destroy();
        include "../view/acc_login.php";
        break;
}
?>
