<table border="1" width="100%">
    <tr>
		<th>Carr Codigo</th>
		<th>Esc Codigo</th>
		<th>Carr Descripcion</th>
		<th>Actions</th>
    </tr>
	<?php foreach($carreras as $c){ ?>
    <tr>
		<td><?php echo $c['carr_codigo']; ?></td>
		<td><?php echo $c['esc_codigo']; ?></td>
		<td><?php echo $c['carr_descripcion']; ?></td>
		<td>
            <a href="<?php echo site_url('carrera/edit/'.$c['carr_codigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('carrera/remove/'.$c['carr_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>