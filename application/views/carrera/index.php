<table border="1" width="100%">
    <tr>
		<th>CARR CODIGO</th>
		<th>ESC CODIGO</th>
		<th>CARR DESCRIPCION</th>
		<th>Actions</th>
    </tr>
	<?php foreach($carreras as $C){ ?>
    <tr>
		<td><?php echo $C['CARR_CODIGO']; ?></td>
		<td><?php echo $C['ESC_CODIGO']; ?></td>
		<td><?php echo $C['CARR_DESCRIPCION']; ?></td>
		<td>
            <a href="<?php echo site_url('carrera/edit/'.$C['id']); ?>">Edit</a> | 
            <a href="<?php echo site_url('carrera/remove/'.$C['id']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>