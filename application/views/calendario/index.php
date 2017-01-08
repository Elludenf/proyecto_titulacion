<table border="1" width="100%">
    <tr>
		<th>Calcodigo</th>
		<th>Pac Codigo</th>
		<th>Calfecha</th>
		<th>Caldiasemana</th>
		<th>Callaborablesn</th>
		<th>Actions</th>
    </tr>
	<?php foreach($calendarios as $c){ ?>
    <tr>
		<td><?php echo $c['calcodigo']; ?></td>
		<td><?php echo $c['pac_codigo']; ?></td>
		<td><?php echo $c['calfecha']; ?></td>
		<td><?php echo $c['caldiasemana']; ?></td>
		<td><?php echo $c['callaborablesn']; ?></td>
		<td>
            <a href="<?php echo site_url('calendario/edit/'.$c['calcodigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('calendario/remove/'.$c['calcodigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>