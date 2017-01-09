<table border="1" width="100%">
    <tr>
		<th>Zrolcodigo</th>
		<th>Zroldescripcion</th>
		<th>Actions</th>
    </tr>
	<?php foreach($zroles as $z){ ?>
    <tr>
		<td><?php echo $z['zrolcodigo']; ?></td>
		<td><?php echo $z['zroldescripcion']; ?></td>
		<td>
            <a href="<?php echo site_url('zrole/edit/'.$z['zrolcodigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('zrole/remove/'.$z['zrolcodigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>