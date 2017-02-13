<table border="1" width="100%">
    <tr>
		<th>Res Codigo</th>
		<th>Prof Codigo</th>
		<th>Res Tipo</th>
		<th>Res Fechanombramiento</th>
		<th>Actions</th>
    </tr>
	<?php foreach($responsables_titulacion as $r){ ?>
    <tr>
		<td><?php echo $r['res_codigo']; ?></td>
		<td><?php echo $r['prof_codigo']; ?></td>
		<td><?php echo $r['res_tipo']; ?></td>
		<td><?php echo $r['res_fechanombramiento']; ?></td>
		<td>
            <a href="<?php echo site_url('responsables_titulacion/edit/'.$r['res_codigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('responsables_titulacion/remove/'.$r['res_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>