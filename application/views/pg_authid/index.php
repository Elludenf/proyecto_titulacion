<table border="1" width="100%">
    <tr>
		<th>Rolname</th>
		<th>Actions</th>
    </tr>
	<?php foreach($pg_authid as $p){ ?>
    <tr>
		<td><?php echo $p['rolname']; ?></td>
		<td>
            <a href="<?php echo site_url('pg_authid/edit/'.$p['rolname']); ?>">Edit</a> |
            <a href="<?php echo site_url('pg_authid/remove/'.$p['rolname']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>