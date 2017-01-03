<table border="1" width="100%">
    <tr>
		<th>PER CODIGO</th>
		<th>PER NOMBRE1</th>
		<th>PER NOMBRE2</th>
		<th>PER APELLIDO1</th>
		<th>PER APELLIDO2</th>
		<th>PER TIPOID</th>
		<th>PER ID</th>
		<th>PER DIRECCION</th>
		<th>PER TELEFONO</th>
		<th>PER CELULAR</th>
		<th>PER MAIL</th>
		<th>PER MAILPUCE</th>
		<th>PER FECHANAC</th>
		<th>PER SEXO</th>
		<th>PER FOTO</th>
		<th>EST FECHAINGRESO</th>
		<th>EST FECHAESTIMADAGRADUACION</th>
		<th>EST FECHAGRADUACION</th>
		<th>EST CARRERA</th>
		<th>Actions</th>
    </tr>
	<?php foreach($estudiante as $E){ ?>
    <tr>
		<td><?php echo $E['PER_CODIGO']; ?></td>
		<td><?php echo $E['PER_NOMBRE1']; ?></td>
		<td><?php echo $E['PER_NOMBRE2']; ?></td>
		<td><?php echo $E['PER_APELLIDO1']; ?></td>
		<td><?php echo $E['PER_APELLIDO2']; ?></td>
		<td><?php echo $E['PER_TIPOID']; ?></td>
		<td><?php echo $E['PER_ID']; ?></td>
		<td><?php echo $E['PER_DIRECCION']; ?></td>
		<td><?php echo $E['PER_TELEFONO']; ?></td>
		<td><?php echo $E['PER_CELULAR']; ?></td>
		<td><?php echo $E['PER_MAIL']; ?></td>
		<td><?php echo $E['PER_MAILPUCE']; ?></td>
		<td><?php echo $E['PER_FECHANAC']; ?></td>
		<td><?php echo $E['PER_SEXO']; ?></td>
		<td><?php echo $E['PER_FOTO']; ?></td>
		<td><?php echo $E['EST_FECHAINGRESO']; ?></td>
		<td><?php echo $E['EST_FECHAESTIMADAGRADUACION']; ?></td>
		<td><?php echo $E['EST_FECHAGRADUACION']; ?></td>
		<td><?php echo $E['EST_CARRERA']; ?></td>
		<td>
            <a href="<?php echo site_url('estudiante/edit/'.$E['id']); ?>">Edit</a> | 
            <a href="<?php echo site_url('estudiante/remove/'.$E['id']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>