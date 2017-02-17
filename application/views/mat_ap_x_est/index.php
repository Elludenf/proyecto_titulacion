<table border="1" width="100%">
    <tr>
		<th>Mat Codigo</th>
		<th>Est Codigo</th>
		<th>Actions</th>
    </tr>
	<?php foreach($mat_ap_x_est as $m){ ?>
    <tr>
		<td><?php echo $m['mat_codigo']; ?></td>
		<td><?php echo $m['est_codigo']; ?></td>
		<td>
            <a href="<?php echo site_url('mat_ap_x_est/edit/'.$m['mat_codigo'].'/'.$m['est_codigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('mat_ap_x_est/remove/'.$m['mat_codigo'].'/'.$m['est_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>