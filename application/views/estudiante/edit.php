<?php echo validation_errors(); ?>

<?php echo form_open('estudiante/edit/'.$estudiante['per_codigo']); ?>

	<div>
		Rol Codigo :
		<select name="rol_codigo">
			<option value="">select rol</option>
			<?php
			foreach($all_roles as $rol)
			{
				$selected = ($rol['rol_codigo'] == $estudiante['rol_codigo']) ? ' selected="selected"' : null;

				echo '<option value="'.$rol['rol_codigo'].'" '.$selected.'>'.$rol['rol_descripcion'].'</option>';
			}
			?>
		</select>
	</div>
	<div>Per Nombre1 : <input type="text" name="per_nombre1" value="<?php echo ($this->input->post('per_nombre1') ? $this->input->post('per_nombre1') : $estudiante['per_nombre1']); ?>" /></div>
	<div>Per Nombre2 : <input type="text" name="per_nombre2" value="<?php echo ($this->input->post('per_nombre2') ? $this->input->post('per_nombre2') : $estudiante['per_nombre2']); ?>" /></div>
	<div>Per Apellido1 : <input type="text" name="per_apellido1" value="<?php echo ($this->input->post('per_apellido1') ? $this->input->post('per_apellido1') : $estudiante['per_apellido1']); ?>" /></div>
	<div>Per Apellido2 : <input type="text" name="per_apellido2" value="<?php echo ($this->input->post('per_apellido2') ? $this->input->post('per_apellido2') : $estudiante['per_apellido2']); ?>" /></div>
	<div>Per Tipoid : <input type="text" name="per_tipoid" value="<?php echo ($this->input->post('per_tipoid') ? $this->input->post('per_tipoid') : $estudiante['per_tipoid']); ?>" /></div>
	<div>Per Id : <input type="text" name="per_id" value="<?php echo ($this->input->post('per_id') ? $this->input->post('per_id') : $estudiante['per_id']); ?>" /></div>
	<div>Per Direccion : <input type="text" name="per_direccion" value="<?php echo ($this->input->post('per_direccion') ? $this->input->post('per_direccion') : $estudiante['per_direccion']); ?>" /></div>
	<div>Per Telefono : <input type="text" name="per_telefono" value="<?php echo ($this->input->post('per_telefono') ? $this->input->post('per_telefono') : $estudiante['per_telefono']); ?>" /></div>
	<div>Per Celular : <input type="text" name="per_celular" value="<?php echo ($this->input->post('per_celular') ? $this->input->post('per_celular') : $estudiante['per_celular']); ?>" /></div>
	<div>Per Mail : <input type="text" name="per_mail" value="<?php echo ($this->input->post('per_mail') ? $this->input->post('per_mail') : $estudiante['per_mail']); ?>" /></div>
	<div>Per Mailpuce : <input type="text" name="per_mailpuce" value="<?php echo ($this->input->post('per_mailpuce') ? $this->input->post('per_mailpuce') : $estudiante['per_mailpuce']); ?>" /></div>
	<div>Per Fechanac : <input type="text" name="per_fechanac" value="<?php echo ($this->input->post('per_fechanac') ? $this->input->post('per_fechanac') : $estudiante['per_fechanac']); ?>" /></div>
	<div>Per Sexo : <input type="text" name="per_sexo" value="<?php echo ($this->input->post('per_sexo') ? $this->input->post('per_sexo') : $estudiante['per_sexo']); ?>" /></div>
	<div>Per Foto : <input type="text" name="per_foto" value="<?php echo ($this->input->post('per_foto') ? $this->input->post('per_foto') : $estudiante['per_foto']); ?>" /></div>
	<div>Per Clave : <input type="text" name="per_clave" value="<?php echo ($this->input->post('per_clave') ? $this->input->post('per_clave') : $estudiante['per_clave']); ?>" /></div>
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