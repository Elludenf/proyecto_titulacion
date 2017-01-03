<html>
<head>
<title>Puce</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('form'); ?>

<h5>Usuario</h5>
<input type="text" name="username" value="" size="50" />

<h5>Contraseña</h5>
<input type="text" name="password" value="" size="50" />

<h5>Contraseña Confirmacion</h5>
<input type="text" name="passconf" value="" size="50" />

<h5>Email Address</h5>
<input type="text" name="email" value="" size="50" />

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>