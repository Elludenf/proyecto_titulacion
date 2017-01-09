<table border="1" width="100%">
    <tr>
		<th>Zpermcodigo</th>
		<th>Zrolcodigo</th>
		<th>Actions</th>
    </tr>
	<?php foreach($permxrol as $p){ ?>
    <tr>
		<td><?php echo $p['zpermcodigo']; ?></td>
		<td><?php echo $p['zrolcodigo']; ?></td>
		<td>
            <a href="<?php echo site_url('permxrol/edit/'.$p['id']); ?>">Edit</a> | 
            <a href="<?php echo site_url('permxrol/remove/'.$p['id']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>