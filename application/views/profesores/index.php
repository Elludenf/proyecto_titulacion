<table border="1" width="100%">
    <tr>
		<th>Per Codigo</th>
		<th>Rol Codigo</th>
		<th>Per Nombre1</th>
		<th>Per Nombre2</th>
		<th>Per Apellido1</th>
		<th>Per Apellido2</th>
		<th>Per Tipoid</th>
		<th>Per Id</th>
		<th>Per Direccion</th>
		<th>Per Telefono</th>
		<th>Per Celular</th>
		<th>Per Mail</th>
		<th>Per Mailpuce</th>
		<th>Per Fechanac</th>
		<th>Per Sexo</th>
		<th>Per Foto</th>
		<th>Per Clave</th>
		<th>Pro Oficina</th>
		<th>Actions</th>
    </tr>
	<?php foreach($profesores as $p){ ?>
    <tr>
		<td><?php echo $p['per_codigo']; ?></td>
		<td><?php echo $p['rol_codigo']; ?></td>
		<td><?php echo $p['per_nombre1']; ?></td>
		<td><?php echo $p['per_nombre2']; ?></td>
		<td><?php echo $p['per_apellido1']; ?></td>
		<td><?php echo $p['per_apellido2']; ?></td>
		<td><?php echo $p['per_tipoid']; ?></td>
		<td><?php echo $p['per_id']; ?></td>
		<td><?php echo $p['per_direccion']; ?></td>
		<td><?php echo $p['per_telefono']; ?></td>
		<td><?php echo $p['per_celular']; ?></td>
		<td><?php echo $p['per_mail']; ?></td>
		<td><?php echo $p['per_mailpuce']; ?></td>
		<td><?php echo $p['per_fechanac']; ?></td>
		<td><?php echo $p['per_sexo']; ?></td>
		<td><?php echo $p['per_foto']; ?></td>
		<td><?php echo $p['per_clave']; ?></td>
		<td><?php echo $p['pro_oficina']; ?></td>
		<td>
            <a href="<?php echo site_url('profesor/edit/'.$p['per_codigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('profesor/remove/'.$p['per_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>