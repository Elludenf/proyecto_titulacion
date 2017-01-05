<table border="1" width="100%">
    <tr>
		<th>Per Codigo</th>
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
		<th>Est Fechaingreso</th>
		<th>Est Fechaestimadagraduacion</th>
		<th>Est Fechagraduacion</th>
		<th>Est Carrera</th>
		<th>Actions</th>
    </tr>
	<?php foreach($estudiante as $e){ ?>
    <tr>
		<td><?php echo $e['per_codigo']; ?></td>
		<td><?php echo $e['per_nombre1']; ?></td>
		<td><?php echo $e['per_nombre2']; ?></td>
		<td><?php echo $e['per_apellido1']; ?></td>
		<td><?php echo $e['per_apellido2']; ?></td>
		<td><?php echo $e['per_tipoid']; ?></td>
		<td><?php echo $e['per_id']; ?></td>
		<td><?php echo $e['per_direccion']; ?></td>
		<td><?php echo $e['per_telefono']; ?></td>
		<td><?php echo $e['per_celular']; ?></td>
		<td><?php echo $e['per_mail']; ?></td>
		<td><?php echo $e['per_mailpuce']; ?></td>
		<td><?php echo $e['per_fechanac']; ?></td>
		<td><?php echo $e['per_sexo']; ?></td>
		<td><?php echo $e['per_foto']; ?></td>
		<td><?php echo $e['est_fechaingreso']; ?></td>
		<td><?php echo $e['est_fechaestimadagraduacion']; ?></td>
		<td><?php echo $e['est_fechagraduacion']; ?></td>
		<td><?php echo $e['est_carrera']; ?></td>
		<td>
            <a href="<?php echo site_url('estudiante/edit/'.$e['per_codigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('estudiante/remove/'.$e['per_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>