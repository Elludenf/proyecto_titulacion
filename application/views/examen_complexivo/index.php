<table border="1" width="100%">
    <tr>
		<th>Exa Codigo</th>
		<th>Est Codigo</th>
		<th>Exa Fechainicio</th>
		<th>Exa Estado</th>
		<th>Exa Horas Docencia</th>
		<th>Exa Horas Autonomas</th>
		<th>Actions</th>
    </tr>
	<?php foreach($examenes_complexivo as $e){ ?>
    <tr>
		<td><?php echo $e['exa_codigo']; ?></td>
		<td><?php echo $e['est_codigo']; ?></td>
		<td><?php echo $e['exa_fechainicio']; ?></td>
		<td><?php echo $e['exa_estado']; ?></td>
		<td><?php echo $e['exa_horas_docencia']; ?></td>
		<td><?php echo $e['exa_horas_autonomas']; ?></td>
		<td>
            <a href="<?php echo site_url('examen_complexivo/edit/'.$e['exa_codigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('examen_complexivo/remove/'.$e['exa_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>