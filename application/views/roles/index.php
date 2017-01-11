<table border="1" width="100%">
    <tr>
		<th>Rol Codigo</th>
		<th>Rol Descripcion</th>
		<th>Actions</th>
    </tr>
	<?php foreach($roles as $r){ ?>
    <tr>
		<td><?php echo $r['rol_codigo']; ?></td>
		<td><?php echo $r['rol_descripcion']; ?></td>
		<td>
            <a href="<?php echo site_url('rol/edit/'.$r['rol_codigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('rol/remove/'.$r['rol_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>