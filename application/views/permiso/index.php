<table border="1" width="100%">
    <tr>
		<th>Zpermcodigo</th>
		<th>Zperm Estado</th>
		<th>Zperm Creat</th>
		<th>Zperm Read</th>
		<th>Zperm Update</th>
		<th>Zperm Delete</th>
		<th>Actions</th>
    </tr>
	<?php foreach($permisos as $p){ ?>
    <tr>
		<td><?php echo $p['zpermcodigo']; ?></td>
		<td><?php echo $p['zperm_estado']; ?></td>
		<td><?php echo $p['zperm_creat']; ?></td>
		<td><?php echo $p['zperm_read']; ?></td>
		<td><?php echo $p['zperm_update']; ?></td>
		<td><?php echo $p['zperm_delete']; ?></td>
		<td>
            <a href="<?php echo site_url('permiso/edit/'.$p['zpermcodigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('permiso/remove/'.$p['zpermcodigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>