<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>PUCE</title>
</head>
<body>
    <h3 align="center">Bienvenido!!</h3>
    <h2 align="center">Sistema de seguimiento del proceso de graduacion</h2>
    <div style="background-color: #2b669a" align="center">
        <h1>Inicio de sesion</h1>
        <?php echo validation_errors(); ?>
        <?php echo form_open('verifylogin/index'); ?>
        <p>
        <label for="zusrnombre">Usuario:</label>
        <input type="text" size="20" id="zusrnombre" name="zusrnombre"/>
        </p>
        <br/>
        <p>
        <label for="zusrclave">Contraseña:</label>
        <input type="password" size="20" id="zusrclave" name="zusrclave"/>
        </p>
        <br/>
        <input type="submit" value="Login"/>
        </form>
    </div>
    <p>**los siguientes textos son de prueba:</p>
    <p>* temporalmente, utiice el usuario "rob" y pass: 123 (ingresando el usuario en la base, tabla zusuarios)</p>
    <p>* por el momento el redireccionamiento se lo realiza hacia la pag. Estudiamte/index</p>
    <!--<a ><?php// echo site_url('estudiante/index'); ?></a> -->
    <!--<a href="<?php //echo site_url('verifylogin/index'); ?>">Edit</a> -->
</body>
</html>
