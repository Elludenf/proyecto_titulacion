<table border="1" width="100%">
    <tr>
		<th>Dis Codigo</th>
		<th>Prof Codigo</th>
		<th>Obs Codigo</th>
		<th>Obs Fecha</th>
		<th>Obs Descripcion</th>
		<th>Actions</th>
    </tr>
	<?php foreach($revisiones as $r){ ?>
    <tr>
		<td><?php echo $r['dis_codigo']; ?></td>
		<td><?php echo $r['prof_codigo']; ?></td>
		<td><?php echo $r['obs_codigo']; ?></td>
		<td><?php echo $r['obs_fecha']; ?></td>
		<td><?php echo $r['obs_descripcion']; ?></td>
		<td>
            <a href="<?php echo site_url('revision/edit/'.$r['obs_codigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('revision/remove/'.$r['obs_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>