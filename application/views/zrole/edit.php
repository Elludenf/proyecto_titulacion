<?php echo validation_errors(); ?>

<?php echo form_open('zrole/edit/'.$zrole['zrolcodigo']); ?>

	<div>ZrolCodigo : <input type="text" name="zrolcodigo" value="<?php echo ($this->input->post('zrolcodigo') ? $this->input->post('zrolcodigo') : $zrole['zrolcodigo']); ?>" /></div>
	<div>Zroldescripcion : <input type="text" name="zroldescripcion" value="<?php echo ($this->input->post('zroldescripcion') ? $this->input->post('zroldescripcion') : $zrole['zroldescripcion']); ?>" /></div>
	<div>
		<table border="1" width="100%">
			<tr>
				<td colspan="7" align="center">PERMISOS DEL ROL</td>
			</tr>
			<tr>
				<th>Zpermcodigo</th>
				<th>Zperm Estado</th>
				<th>Zperm Creat</th>
				<th>Zperm Read</th>
				<th>Zperm Update</th>
				<th>Zperm Delete</th>
				<th>Actions</th>
			</tr>
			<?php foreach($permisos_detalle as $p){ ?>
				<tr>
					<td><?php echo $p['zpermcodigo']; ?></td>
					<td><?php echo $p['zperm_estado']; ?></td>
					<td><?php echo $p['zperm_creat']; ?></td>
					<td><?php echo $p['zperm_read']; ?></td>
					<td><?php echo $p['zperm_update']; ?></td>
					<td><?php echo $p['zperm_delete']; ?></td>
					<td><a href="<?php echo site_url('permxrol/remove/'.$p['zpermcodigo']); ?>">Delete</a></td>
				</tr>
			<?php } ?>
			<tr>
				<td colspan="7" align="center"><button type="submit">Add</button></td>

			</tr>
		</table>
		</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>