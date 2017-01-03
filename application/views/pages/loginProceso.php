<?php
echo('lol');
$_POST['user1'];
$_POST['pass1'];


echo $_POST['user1'];
echo $_POST['pass1'];

error_reporting(E_ERROR | E_WARNING | E_PARSE);

$dbconn = pg_connect("host=localhost port=???? dbname=???? user=???? password=????");
//conectarse a una base de datos llamada "????" con el nombre de usuario y password



$query="
	SELECT USER_NAME 
				FROM USUARIOS
				  WHERE USER_NAME='".$_POST['user1']."'
				  AND PASSWORD='".$_POST['pass1']."'";

$result = pg_query_params($dbconn, $query);

   echo pg_last_error($dbconn);

$usuario_valido=false;
while ($arr = pg_fetch_array($result, 0, PGSQL_NUM)){     

    echo "Resultado:".$arr["USER_NAME"];
    $usuario_valido=true;
}
if(!$usuario_valido)
    echo "usuario o clave incorrecta"
?>
<p>Bienvenido:<?php  ?>  </p>


