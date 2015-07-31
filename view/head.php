<head>
    <title>Leoshop Website | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery1.min.js"></script>
    <link rel="stylesheet" href="css/table.css" media="all">
    <!-- start menu -->
    <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <!--start slider -->
    <link rel="stylesheet" href="css/fwslider.css" media="all">
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/css3-mediaqueries.js"></script>
    <script src="js/fwslider.js"></script>
    <!--end slider -->
    <script src="js/jquery.easydropdown.js"></script>
</head>
<body>
    <div class="header-top">
        <div class="wrap"> 
            <div class="header-top-left">
                <div class="box">
                    <select tabindex="4" class="dropdown">
                        <option value="" class="label" value="">Language :</option>
                        <option value="1">English</option>
                        <option value="2">French</option>
                        <option value="3">German</option>
                    </select>
                </div>
                <div class="box1">
                    <select tabindex="4" class="dropdown">
                        <option value="" class="label" value="">Currency :</option>
                        <option value="1">$ Dollar</option>
                        <option value="2">€ Euro</option>
                    </select>
                </div>
                <div class="clear"></div>
            </div>
            <div class="cssmenu">
                <ul>
                    <?php
                    if (isset($_SESSION["\/m&coppy;fptp$02241"])) {
                        echo "Hello ";
                        echo $_SESSION["\/m&coppy;fptp$02241"] . " | ";
                        echo '<li><a href="usercontroller.php?action=logout">Log Out</a></li> |';
                    }
                    else if (isset($_SESSION["\/m&coppy;admin"])) {
                        echo "Hello ";
                        echo $_SESSION["\/m&coppy;admin"] . " | ";
                        echo '<li><a href="admincontroller.php?action=logout">Log Out</a></li> |';
                    }
                    else {
                        echo '<li class="active"><a href="usercontroller.php?action=login_order_form">Account</a></li> |
                              <li><a href="#">Wishlist</a></li> |
                              <li><a href="#">Checkout</a></li> |
                              <li><a href="usercontroller.php?action=acc_login_form">Log In</a></li> |
                              <li><a href="usercontroller.php?action=register_form">Sign Up</a></li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="wrap">
            <div class="header-bottom-left">
                <div class="logo">
                    <a href="index.html"><img src="images/logo.png" alt=""/></a>
                </div>
                <div class="menu">
                    <ul class="megamenu skyblue">
                        <li class="active grid"><a href="usercontroller.php?action=home">Home</a></li>
                        <li><a class="color4" href="#">women</a>
                            <div class="megapanel">
                                <div class="row">
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Contact Lenses</h4>
                                            <ul>
                                                <li><a href="#">Daily-wear soft lenses</a></li>
                                                <li><a href="#">Extended-wear</a></li>
                                                <li><a href="#">Lorem ipsum </a></li>
                                                <li><a href="#">Planned replacement</a></li>
                                            </ul>	
                                        </div>							
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Sun Glasses</h4>
                                            <ul>
                                                <li><a href="#">Heart-Shaped</a></li>
                                                <li><a href="#">Square-Shaped</a></li>
                                                <li><a href="#">Round-Shaped</a></li>
                                                <li><a href="#">Oval-Shaped</a></li>
                                            </ul>	
                                        </div>							
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Eye Glasses</h4>
                                            <ul>
                                                <li><a href="#">Anti Reflective</a></li>
                                                <li><a href="#">Aspheric</a></li>
                                                <li><a href="#">Bifocal</a></li>
                                                <li><a href="#">Hi-index</a></li>
                                                <li><a href="#">Progressive</a></li>
                                            </ul>	
                                        </div>												
                                    </div>
                                </div>
                            </div>
                        </li>				
                        <li><a class="color5" href="#">Men</a>
                            <div class="megapanel">
                                <div class="row">
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Contact Lenses</h4>
                                            <ul>
                                                <li><a href="#">Daily-wear soft lenses</a></li>
                                                <li><a href="#">Extended-wear</a></li>
                                                <li><a href="#">Lorem ipsum </a></li>
                                                <li><a href="#">Planned replacement</a></li>
                                            </ul>	
                                        </div>							
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Sun Glasses</h4>
                                            <ul>
                                                <li><a href="#">Heart-Shaped</a></li>
                                                <li><a href="#">Square-Shaped</a></li>
                                                <li><a href="#">Round-Shaped</a></li>
                                                <li><a href="#">Oval-Shaped</a></li>
                                            </ul>	
                                        </div>							
                                    </div>
                                    <div class="col1">
                                        <div class="h_nav">
                                            <h4>Eye Glasses</h4>
                                            <ul>
                                                <li><a href="#">Anti Reflective</a></li>
                                                <li><a href="#">Aspheric</a></li>
                                                <li><a href="#">Bifocal</a></li>
                                                <li><a href="#">Hi-index</a></li>
                                                <li><a href="#">Progressive</a></li>
                                            </ul>	
                                        </div>												
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a class="color6" href="#">Purchase</a></li>

                        <?php
                        if (isset($_SESSION["\/m&coppy;admin"])) {

                            echo '
                        <li><a class="color7" href="admincontroller.php?action=admin">Manage</a>
                            <div class="megapanel">
                                <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4><a href="admincontroller.php?action=list_pro">Product List</a></h4>
                                        <ul>
                                            <li><a href="admincontroller.php?action=add_pro_form">Add product</a></li>
                                            <li><a href="admincontroller.php?action=update_pro_form">Update</a></li>
                                            <li><a href="admincontroller.php?action=del_pro_form">Delete</a></li>
                                        </ul>	
                                    </div>							
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4><a href="admincontroller.php?action=list_acc">Customer List</a></h4>
                                        <ul>
                                            <li><a href="admincontroller.php?action=add_acc_form">Add customer</a></li>
                                            <li><a href="admincontroller.php?action=update_acc_form">Update</a></li>
                                            <li><a href="admincontroller.php?action=del_acc_form">Delete</a></li>
                                    </div>							
                                </div>
                                </div>
                            </div>
                        </li>';
                            
                        } else {
                            echo '<li><a class="color7" href="admincontroller.php?action=admin">Manage</a>';
                        }
                        ?>
                        
                    </ul>
                </div>
            </div>
            <div class="header-bottom-right">
                <div class="search">	  
                    <input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value="Subscribe" id="submit" name="submit">
                    <div id="response"> </div>
                </div>
                <div class="tag-list">
                    <ul class="icon1 sub-icon1 profile_img">
                        <li><a class="active-icon c1" href="#"> </a>
                            <ul class="sub-icon1 list">
                                <li><h3>sed diam nonummy</h3><a href=""></a></li>
                                <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="icon1 sub-icon1 profile_img">
                        <li><a class="active-icon c2" href="#"> </a>
                            <ul class="sub-icon1 list">
                                <li><h3>No Products</h3><a href=""></a></li>
                                <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="last"><li><a href="#">Cart(0)</a></li></ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>