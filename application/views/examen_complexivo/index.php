<table border="1" width="100%">
    <tr>
		<th>Exa Codigo</th>
		<th>Per Codigo</th>
		<th>Exa Fechainicio</th>
		<th>Exa Estado</th>
		<th>Actions</th>
    </tr>
	<?php foreach($examen_complexivo as $e){ ?>
    <tr>
		<td><?php echo $e['exa_codigo']; ?></td>
		<td><?php echo $e['per_codigo']; ?></td>
		<td><?php echo $e['exa_fechainicio']; ?></td>
		<td><?php echo $e['exa_estado']; ?></td>
		<td>
            <a href="<?php echo site_url('examen_complexivo/edit/'.$e['exa_codigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('examen_complexivo/remove/'.$e['exa_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>