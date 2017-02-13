<table border="1" width="100%">
    <tr>
		<th>Prof Codigo</th>
		<th>Prof Nombre1</th>
		<th>Prof Nombre2</th>
		<th>Prof Apellido1</th>
		<th>Prof Apellido2</th>
		<th>Prof Tipoid</th>
		<th>Prof Id</th>
		<th>Prof Direccion</th>
		<th>Prof Telefono</th>
		<th>Prof Celular</th>
		<th>Prof Mail</th>
		<th>Prof Mailpuce</th>
		<th>Prof Fechanac</th>
		<th>Prof Sexo</th>
		<th>Prof Foto</th>
		<th>Prof Oficina</th>
		<th>Actions</th>
    </tr>
	<?php foreach($profesores as $p){ ?>
    <tr>
		<td><?php echo $p['prof_codigo']; ?></td>
		<td><?php echo $p['prof_nombre1']; ?></td>
		<td><?php echo $p['prof_nombre2']; ?></td>
		<td><?php echo $p['prof_apellido1']; ?></td>
		<td><?php echo $p['prof_apellido2']; ?></td>
		<td><?php echo $p['prof_tipoid']; ?></td>
		<td><?php echo $p['prof_id']; ?></td>
		<td><?php echo $p['prof_direccion']; ?></td>
		<td><?php echo $p['prof_telefono']; ?></td>
		<td><?php echo $p['prof_celular']; ?></td>
		<td><?php echo $p['prof_mail']; ?></td>
		<td><?php echo $p['prof_mailpuce']; ?></td>
		<td><?php echo $p['prof_fechanac']; ?></td>
		<td><?php echo $p['prof_sexo']; ?></td>
		<td><?php echo $p['prof_foto']; ?></td>
		<td><?php echo $p['prof_oficina']; ?></td>
		<td>
            <a href="<?php echo site_url('profesor/edit/'.$p['prof_codigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('profesor/remove/'.$p['prof_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>