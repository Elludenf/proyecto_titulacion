
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
    body {
	background-color:white;
	}
aside{
    color: #212121;;
    font-size: 20px;
    /*text-align: right;*/
    background: #FF0;
    position: relative;
    right:0px;
    height: 800px;
    width: 200px;
    float: right;

}
p{
    color: #0000FF;
    font-size: 10px;
}
/*este es un comentario*/
a {
    text-decoration: none;
    color: #000000;
}
li{
    display: inline-block;
    list-style: none !important;
    margin-right:15px;
}
.formato1{
    color: #FFFF00;
}
#formato2{
    /*solo un elemento se aplica*/
    color: #00FFFF;
}
@media screen and (max-width: 800px)
{
    nav{
        display:none;
    }
}
    </style>
<link href="ccslogin.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">

<div id="login">
<h2>Formulario Login1</h2>
<form action='<?php echo base_url();?>loginproceso.php' method="post">
<p>
<label>Nombre de usuario :</label>
<input id="name" name="username" placeholder="username" type="text">
</p>
<p>
<label>Contraseña :</label>
<input id="password" name="password" placeholder="**********" type="password">
</p>
<input name="submit" type="submit" value=" Login ">


</form>

</div>
</div>
</body>
</html>