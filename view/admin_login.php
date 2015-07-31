<!doctype html>
<html>
    <?php
    include '../view/head.php';
    ?>
    <div class="col_1_of_login span_1_of_login">
        <div class="login-title">
            <h4 class="title">Adminstrator</h4>
            <div id="loginbox" class="loginbox">
                <form action="admincontroller.php" method="post" name="admin" id="login-form">
                    <input type="hidden" name="action" value="login"/>
                    <fieldset class="input">
                        <p id="login-form-username">
                            
                                <label for="modlgn_username">Admin</label>
                                <input id="modlgn_username" type="text" name="admin" class="inputbox" size="18">
                           
                        </p>
                        <p id="login-form-password">
                            <label for="modlgn_passwd">Password</label>
                            <input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18">
                        </p>
                        <div class="remember">
                            <p id="login-form-remember">
                                <label for="modlgn_remember"><a href="#">Forget Your Password ? </a></label>
                            </p>
                            <input type="submit" name="Submit" class="button" value="Login"><div class="clear"></div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>


    <?php
    include '../view/footer.php';
    ?>
</body>
</html>
