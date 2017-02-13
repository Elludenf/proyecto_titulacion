<?php echo validation_errors(); ?>

<?php echo form_open('estudiante/edit/'.$estudiante['est_codigo']); ?>

	<div>Est Nombre1 : <input type="text" name="est_nombre1" value="<?php echo ($this->input->post('est_nombre1') ? $this->input->post('est_nombre1') : $estudiante['est_nombre1']); ?>" /></div>
	<div>Est Nombre2 : <input type="text" name="est_nombre2" value="<?php echo ($this->input->post('est_nombre2') ? $this->input->post('est_nombre2') : $estudiante['est_nombre2']); ?>" /></div>
	<div>Est Apellido1 : <input type="text" name="est_apellido1" value="<?php echo ($this->input->post('est_apellido1') ? $this->input->post('est_apellido1') : $estudiante['est_apellido1']); ?>" /></div>
	<div>Est Apellido2 : <input type="text" name="est_apellido2" value="<?php echo ($this->input->post('est_apellido2') ? $this->input->post('est_apellido2') : $estudiante['est_apellido2']); ?>" /></div>
	<div>Est Tipoid : <input type="text" name="est_tipoid" value="<?php echo ($this->input->post('est_tipoid') ? $this->input->post('est_tipoid') : $estudiante['est_tipoid']); ?>" /></div>
	<div>Est Id : <input type="text" name="est_id" value="<?php echo ($this->input->post('est_id') ? $this->input->post('est_id') : $estudiante['est_id']); ?>" /></div>
	<div>Est Direccion : <input type="text" name="est_direccion" value="<?php echo ($this->input->post('est_direccion') ? $this->input->post('est_direccion') : $estudiante['est_direccion']); ?>" /></div>
	<div>Est Telefono : <input type="text" name="est_telefono" value="<?php echo ($this->input->post('est_telefono') ? $this->input->post('est_telefono') : $estudiante['est_telefono']); ?>" /></div>
	<div>Est Celular : <input type="text" name="est_celular" value="<?php echo ($this->input->post('est_celular') ? $this->input->post('est_celular') : $estudiante['est_celular']); ?>" /></div>
	<div>Est Mail : <input type="text" name="est_mail" value="<?php echo ($this->input->post('est_mail') ? $this->input->post('est_mail') : $estudiante['est_mail']); ?>" /></div>
	<div>Est Mailpuce : <input type="text" name="est_mailpuce" value="<?php echo ($this->input->post('est_mailpuce') ? $this->input->post('est_mailpuce') : $estudiante['est_mailpuce']); ?>" /></div>
	<div>Est Fechanac : <input type="text" name="est_fechanac" value="<?php echo ($this->input->post('est_fechanac') ? $this->input->post('est_fechanac') : $estudiante['est_fechanac']); ?>" /></div>
	<div>Est Sexo : <input type="text" name="est_sexo" value="<?php echo ($this->input->post('est_sexo') ? $this->input->post('est_sexo') : $estudiante['est_sexo']); ?>" /></div>
	<div>Est Foto : <input type="text" name="est_foto" value="<?php echo ($this->input->post('est_foto') ? $this->input->post('est_foto') : $estudiante['est_foto']); ?>" /></div>
	<div>
		Carr Codigo :
		<select name="carr_codigo">
			<option value="">select carrera</option>
			<?php
			foreach($all_carreras as $carrera)
			{
				$selected = ($carrera['carr_codigo'] == $estudiante['carr_codigo']) ? ' selected="selected"' : null;

				echo '<option value="'.$carrera['carr_codigo'].'" '.$selected.'>'.$carrera['carr_descripcion'].'</option>';
			}
			?>
		</select>
	</div>
	<div>Est Fechaingreso : <input type="text" name="est_fechaingreso" value="<?php echo ($this->input->post('est_fechaingreso') ? $this->input->post('est_fechaingreso') : $estudiante['est_fechaingreso']); ?>" /></div>
	<div>Est Fechaestimadagraduacion : <input type="text" name="est_fechaestimadagraduacion" value="<?php echo ($this->input->post('est_fechaestimadagraduacion') ? $this->input->post('est_fechaestimadagraduacion') : $estudiante['est_fechaestimadagraduacion']); ?>" /></div>
	<div>Est Fechagraduacion : <input type="text" name="est_fechagraduacion" value="<?php echo ($this->input->post('est_fechagraduacion') ? $this->input->post('est_fechagraduacion') : $estudiante['est_fechagraduacion']); ?>" /></div>

	<button type="submit">Save</button>

<?php echo form_close(); ?>