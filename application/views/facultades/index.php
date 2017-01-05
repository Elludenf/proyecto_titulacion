<table border="1" width="100%">
    <tr>
		<th>Facu Codigo</th>
		<th>Facu Descripcion</th>
		<th>Actions</th>
    </tr>
	<?php foreach($facultades as $f){ ?>
    <tr>
		<td><?php echo $f['facu_codigo']; ?></td>
		<td><?php echo $f['facu_descripcion']; ?></td>
		<td>
            <a href="<?php echo site_url('facultades/edit/'.$f['facu_codigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('facultades/remove/'.$f['facu_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>