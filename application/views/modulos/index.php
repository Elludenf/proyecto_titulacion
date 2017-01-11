<table border="1" width="100%">
    <tr>
		<th>Mod Codigo</th>
		<th>Mod Descripcion</th>
		<th>Actions</th>
    </tr>
	<?php foreach($modulos as $m){ ?>
    <tr>
		<td><?php echo $m['mod_codigo']; ?></td>
		<td><?php echo $m['mod_descripcion']; ?></td>
		<td>
            <a href="<?php echo site_url('modulo/edit/'.$m['mod_codigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('modulo/remove/'.$m['mod_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>