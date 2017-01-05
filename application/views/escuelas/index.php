<table border="1" width="100%">
    <tr>
		<th>Esc Codigo</th>
		<th>Facu Codigo</th>
		<th>Esc Descripcion</th>
		<th>Actions</th>
    </tr>
	<?php foreach($escuelas as $e){ ?>
    <tr>
		<td><?php echo $e['esc_codigo']; ?></td>
		<td><?php echo $e['facu_codigo']; ?></td>
		<td><?php echo $e['esc_descripcion']; ?></td>
		<td>
            <a href="<?php echo site_url('escuelas/edit/'.$e['esc_codigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('escuelas/remove/'.$e['esc_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>