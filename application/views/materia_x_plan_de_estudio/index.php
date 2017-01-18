<table border="1" width="100%">
    <tr>
		<th>Plan Codigo</th>
		<th>Mat Codigo</th>
		<th>Pac Codigo</th>
		<th>Actions</th>
    </tr>
	<?php foreach($materia_x_plan_de_estudio as $m){ ?>
    <tr>
		<td><?php echo $m['plan_codigo']; ?></td>
		<td><?php echo $m['mat_codigo']; ?></td>
		<td><?php echo $m['pac_codigo']; ?></td>
		<td>
            <a href="<?php echo site_url('materia_x_plan_de_estudio/edit/'.$m['id']); ?>">Edit</a> |
            <a href="<?php echo site_url('materia_x_plan_de_estudio/remove/'.$m['id']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>