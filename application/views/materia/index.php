<table border="1" width="100%">
    <tr>
		<th>Mat Codigo</th>
		<th>Mat Nombre</th>
		<th>Mat Nivel</th>
		<th>Actions</th>
    </tr>
	<?php foreach($materias as $m){ ?>
    <tr>
		<td><?php echo $m['mat_codigo']; ?></td>
		<td><?php echo $m['mat_nombre']; ?></td>
		<td><?php echo $m['mat_nivel']; ?></td>
		<td>
            <a href="<?php echo site_url('materia/edit/'.$m['mat_codigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('materia/remove/'.$m['mat_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>