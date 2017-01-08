<table border="1" width="100%">
    <tr>
		<th>Zusrcodigo</th>
		<th>Zrolcodigo</th>
		<th>Per Codigo</th>
		<th>Zusrnombre</th>
		<th>Zusrclave</th>
		<th>Actions</th>
    </tr>
	<?php foreach($zusuarios as $z){ ?>
    <tr>
		<td><?php echo $z['zusrcodigo']; ?></td>
		<td><?php echo $z['zrolcodigo']; ?></td>
		<td><?php echo $z['per_codigo']; ?></td>
		<td><?php echo $z['zusrnombre']; ?></td>
		<td><?php echo $z['zusrclave']; ?></td>
		<td>
            <a href="<?php echo site_url('zusuario/edit/'.$z['zusrcodigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('zusuario/remove/'.$z['zusrcodigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>