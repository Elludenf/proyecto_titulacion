<table border="1" width="100%">
    <tr>
		<th>Pro Codigo</th>
		<th>Dis Codigo</th>
		<th>Pro Fechaint</th>
		<th>Pro Fechainicio</th>
		<th>Pro Fechafin</th>
		<th>Pro Descripcion</th>
		<th>Pro Detalle</th>
		<th>Actions</th>
    </tr>
	<?php foreach($prorrogas as $p){ ?>
    <tr>
		<td><?php echo $p['pro_codigo']; ?></td>
		<td><?php echo $p['dis_codigo']; ?></td>
		<td><?php echo $p['pro_fechaint']; ?></td>
		<td><?php echo $p['pro_fechainicio']; ?></td>
		<td><?php echo $p['pro_fechafin']; ?></td>
		<td><?php echo $p['pro_descripcion']; ?></td>
		<td><?php echo $p['pro_detalle']; ?></td>
		<td>
            <a href="<?php echo site_url('prorroga/edit/'.$p['pro_codigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('prorroga/remove/'.$p['pro_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>