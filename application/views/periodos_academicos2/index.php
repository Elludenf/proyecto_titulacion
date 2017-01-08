<table border="1" width="100%">
    <tr>
		<th>Pac Codigo</th>
		<th>Pac Descripcion</th>
		<th>Pac Fechainicio</th>
		<th>Pac Fechafinal</th>
		<th>Pac Perido</th>
		<th>Actions</th>
    </tr>
	<?php foreach($periodos_academicos2 as $p){ ?>
    <tr>
		<td><?php echo $p['pac_codigo']; ?></td>
		<td><?php echo $p['pac_descripcion']; ?></td>
		<td><?php echo $p['pac_fechainicio']; ?></td>
		<td><?php echo $p['pac_fechafinal']; ?></td>
		<td><?php echo $p['pac_perido']; ?></td>
		<td>
            <a href="<?php echo site_url('periodos_academicos2/edit/'.$p['pac_codigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('periodos_academicos2/remove/'.$p['pac_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>