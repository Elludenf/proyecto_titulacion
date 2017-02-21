<table border="1" width="100%">
    <tr>
		<th>Mat Codigo</th>
		<th>Exa Codigo</th>
		<th>Mxe Fecha 1</th>
		<th>Mxe Fecha 2</th>
		<th>Mxe Nota Horal 1</th>
		<th>Mxe Nota Escrita 1</th>
		<th>Mxe Nota Horal 2</th>
		<th>Mxe Nota Escrita 2</th>
		<th>Actions</th>
    </tr>
	<?php foreach($matsorteadas_x_examen as $m){ ?>
    <tr>
		<td><?php echo $m['mat_codigo']; ?></td>
		<td><?php echo $m['exa_codigo']; ?></td>
		<td><?php echo $m['mxe_fecha_1']; ?></td>
		<td><?php echo $m['mxe_fecha_2']; ?></td>
		<td><?php echo $m['mxe_nota_horal_1']; ?></td>
		<td><?php echo $m['mxe_nota_escrita_1']; ?></td>
		<td><?php echo $m['mxe_nota_horal_2']; ?></td>
		<td><?php echo $m['mxe_nota_escrita_2']; ?></td>
		<td>
            <a href="<?php echo site_url('matsorteadas_x_examan/edit/'.$m['mat_codigo'].'/'.$m['exa_codigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('matsorteadas_x_examan/remove/'.$m['mat_codigo'].'/'.$m['exa_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>