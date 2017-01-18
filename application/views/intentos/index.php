<table border="1" width="100%">
    <tr>
		<th>Int Codigo</th>
		<th>Exa Codigo</th>
		<th>Int Fechaint</th>
		<th>Actions</th>
    </tr>
	<?php foreach($intentos as $i){ ?>
    <tr>
		<td><?php echo $i['int_codigo']; ?></td>
		<td><?php echo $i['exa_codigo']; ?></td>
		<td><?php echo $i['int_fechaint']; ?></td>
		<td>
            <a href="<?php echo site_url('intento/edit/'.$i['int_codigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('intento/remove/'.$i['int_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>