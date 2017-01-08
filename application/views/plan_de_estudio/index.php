<table border="1" width="100%">
    <tr>
		<th>Plan Codigo</th>
		<th>Carr Codigo</th>
		<th>Plan Descripcion</th>
		<th>Plan Fechainicio</th>
		<th>Plan Vigencia</th>
		<th>Actions</th>
    </tr>
	<?php foreach($planes_de_estudio as $p){ ?>
    <tr>
		<td><?php echo $p['plan_codigo']; ?></td>
		<td><?php echo $p['carr_codigo']; ?></td>
		<td><?php echo $p['plan_descripcion']; ?></td>
		<td><?php echo $p['plan_fechainicio']; ?></td>
		<td><?php echo $p['plan_vigencia']; ?></td>
		<td>
            <a href="<?php echo site_url('plan_de_estudio/edit/'.$p['plan_codigo']); ?>">Edit</a> |
            <a href="<?php echo site_url('plan_de_estudio/remove/'.$p['plan_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>