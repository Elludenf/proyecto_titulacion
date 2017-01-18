<table border="1" width="100%">
    <tr>
		<th>Perm Codigo</th>
		<th>Rol Codigo</th>
		<th>Actions</th>
    </tr>
	<?php foreach($permxrol as $p){ ?>
    <tr>
		<td><?php echo $p['perm_codigo']; ?></td>
		<td><?php echo $p['rol_codigo']; ?></td>
		<td>
            <a href="<?php echo site_url('permxrol/edit/'.$p['id']); ?>">Edit</a> | 
            <a href="<?php echo site_url('permxrol/remove/'.$p['id']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>