<table border="1" width="100%">
    <tr>
		<th>Red Codigo</th>
		<th>Per Codigo</th>
		<th>Red Tipo</th>
		<th>Red Fechanombramiento</th>
		<th>Actions</th>
    </tr>
	<?php foreach($rev_dir_trab_titulacion as $r){ ?>
    <tr>
		<td><?php echo $r['red_codigo']; ?></td>
		<td><?php echo $r['per_codigo']; ?></td>
		<td><?php echo $r['red_tipo']; ?></td>
		<td><?php echo $r['red_fechanombramiento']; ?></td>
		<td>
            <a href="<?php echo site_url('rev_dir_trab_titulacion/edit/'.$r['red_codigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('rev_dir_trab_titulacion/remove/'.$r['red_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>