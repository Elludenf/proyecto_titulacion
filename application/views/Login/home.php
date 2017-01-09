
<!DOCTYPE html>
<html>
<head>

<link href="ccslogin.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">

<div id="login">
<h2>Formulario Login2</h2>
<form action='<?php echo base_url();?>loginproceso.php' method="post">
<p>
<label>Nombre de usuario :</label>
<input id="name" name="username" placeholder="username" type="text">
</p>
<p>
<label>Contraseñafa :</label>
<input id="password" name="password" placeholder="**********" type="password">
</p>
<input name="submit" type="submit" value=" Login ">


</form>

</div>
</div>
</body>
</html>