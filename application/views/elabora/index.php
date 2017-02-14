<table border="1" width="100%">
    <tr>
		<th>Est Codigo</th>
		<th>Dis Codigo</th>
		<th>Elb Nota Horal</th>
		<th>Elb Nota Escrito</th>
		<th>Actions</th>
    </tr>
	<?php foreach($elabora as $e){ ?>
    <tr>
		<td><?php echo $e['est_codigo']; ?></td>
		<td><?php echo $e['dis_codigo']; ?></td>
		<td><?php echo $e['elb_nota_horal']; ?></td>
		<td><?php echo $e['elb_nota_escrito']; ?></td>
		<td>
            <a href="<?php echo site_url('elabora/edit/'.$e['est_codigo'].'/'.$e['dis_codigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('elabora/remove/'.$e['est_codigo'].'/'.$e['dis_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>