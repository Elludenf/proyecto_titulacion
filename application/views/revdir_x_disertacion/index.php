<table border="1" width="100%">
    <tr>
		<th>Dis Codigo</th>
		<th>Prof Codigo</th>
		<th>Rxd Tipo</th>
		<th>Rxd Fechanombramiento</th>
		<th>Actions</th>
    </tr>
	<?php foreach($revdir_x_disertacion as $r){ ?>
    <tr>
		<td><?php echo $r['dis_codigo']; ?></td>
		<td><?php echo $r['prof_codigo']; ?></td>
		<td><?php echo $r['rxd_tipo']; ?></td>
		<td><?php echo $r['rxd_fechanombramiento']; ?></td>
		<td>
            <a href="<?php echo site_url('revdir_x_disertacion/edit/'.$r['dis_codigo'].'/'.$r['prof_codigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('revdir_x_disertacion/remove/'.$r['dis_codigo'].'/'.$r['prof_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>