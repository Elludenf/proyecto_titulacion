<div class="clear"></div>

<!-- Start: login-holder -->
<div id="login-holder">

    <div id = "login-box">
        <!--  start login-title -->
        <div id = "login-title">
            <h2>Inicio de Sesión</h2>
        </div>
        <!--  end login-title -->

        <!--  start login-inner -->
        <div id="login-inner">
            <?php if(validation_errors() == true) {?>

                <div id="log_errors"  title="Error"> <?php echo validation_errors(); ?></div>

            <?php  }?>
            <?php echo form_open('verifylogin/index'); ?>
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <th><label for="rolname">Usuario:</label> </th>
                    <td><input type="text"  class="login-inp" id="rolname" name="rolname"/></td>

                </tr>
                <tr>
                    <th><label for="rolpassword">Contraseña:</label></th>
                    <td><input type="password" value="************"  onfocus="this.value=''" class="login-inp" id="rolpassword" name="rolpassword" /></td>

                </tr>

                <tr>
                    <th></th>
                    <td><input value="" type="submit" class="submit-login"  /></td>
                </tr>



            </table>

        </div>
        <!--  end login-inner -->

        <a href="" class="forgot-pwd"><br>¿Olvidaste tu contraseña?</a>
    </div>


    <div id="password-fgt" title="Inconvenientes con tus credenciales">
        <p>Por favor dirigite al centro de informatica</p>
    </div>

</div>
<!-- End: login-holder -->

<div class="clear"></div>
<div class="clear"></div>
<div class="clear"></div>



