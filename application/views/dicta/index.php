<table border="1" width="100%">
    <tr>
		<th>Prof Codigo</th>
		<th>Mat Codigo</th>
		<th>Actions</th>
    </tr>
	<?php foreach($dicta as $d){ ?>
    <tr>
		<td><?php echo $d['prof_codigo']; ?></td>
		<td><?php echo $d['mat_codigo']; ?></td>
		<td>
            <a href="<?php echo site_url('dicta/edit/'.$d['prof_codigo'].'/'.$d['mat_codigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('dicta/remove/'.$d['prof_codigo'].'/'.$d['mat_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>