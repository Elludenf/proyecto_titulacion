<table border="1" width="100%">
    <tr>
		<th>Dis Codigo</th>
		<th>Dis Fechainicio</th>
		<th>Dis Fechapresentacionplan</th>
		<th>Dis Fechaaprobacion</th>
		<th>Dis Titulo</th>
		<th>Dis Estado</th>
		<th>Dis Fechafin</th>
		<th>Dis Defensa</th>
		<th>Actions</th>
    </tr>
	<?php foreach($trabajos_disertacion as $t){ ?>
    <tr>
		<td><?php echo $t['dis_codigo']; ?></td>
		<td><?php echo $t['dis_fechainicio']; ?></td>
		<td><?php echo $t['dis_fechapresentacionplan']; ?></td>
		<td><?php echo $t['dis_fechaaprobacion']; ?></td>
		<td><?php echo $t['dis_titulo']; ?></td>
		<td><?php echo $t['dis_estado']; ?></td>
		<td><?php echo $t['dis_fechafin']; ?></td>
		<td><?php echo $t['dis_defensa']; ?></td>
		<td>
            <a href="<?php echo site_url('trabajo_disertacion/edit/'.$t['dis_codigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('trabajo_disertacion/remove/'.$t['dis_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>