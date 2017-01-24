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
		<td><?php echo $p['perm_codigo']; ?></td>
		<td><?php echo $p['perm_estado']; ?></td>
		<td><?php echo $p['perm_creat']; ?></td>
		<td><?php echo $p['perm_read']; ?></td>
		<td><?php echo $p['perm_update']; ?></td>
		<td><?php echo $p['perm_delete']; ?></td>
		<td>
            <a href="<?php echo site_url('permiso/edit/'.$p['perm_codigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('permiso/remove/'.$p['perm_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>