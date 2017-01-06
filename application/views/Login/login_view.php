<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Simple Login with CodeIgniter</title>
</head>
<body>
<h1>Inicio de sesion1</h1>
<?php echo validation_errors(); ?>
<?php echo form_open('verifylogin/index'); ?>
<label for="zusrnombre">Usuario:</label>
<input type="text" size="20" id="zusrnombre" name="zusrnombre"/>
<br/>
<label for="zusrclave">Contraseña:</label>
<input type="password" size="20" id="zusrclave" name="zusrclave"/>
<br/>
<input type="submit" value="Login"/>
</form>
<a ><?php echo site_url('estudiante/index'); ?></a>
<a href="<?php echo site_url('verifylogin/index'); ?>">Edit</a>
</body>
</html>
