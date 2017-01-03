<?php echo validation_errors(); ?>

<?php echo form_open('estudiante/edit/'.$estudiante['PER_CODIGO']); ?>

	<div>PER NOMBRE1 : <input type="text" name="PER_NOMBRE1" value="<?php echo ($this->input->post('PER_NOMBRE1') ? $this->input->post('PER_NOMBRE1') : $estudiante['PER_NOMBRE1']); ?>" /></div>
	<div>PER NOMBRE2 : <input type="text" name="PER_NOMBRE2" value="<?php echo ($this->input->post('PER_NOMBRE2') ? $this->input->post('PER_NOMBRE2') : $estudiante['PER_NOMBRE2']); ?>" /></div>
	<div>PER APELLIDO1 : <input type="text" name="PER_APELLIDO1" value="<?php echo ($this->input->post('PER_APELLIDO1') ? $this->input->post('PER_APELLIDO1') : $estudiante['PER_APELLIDO1']); ?>" /></div>
	<div>PER APELLIDO2 : <input type="text" name="PER_APELLIDO2" value="<?php echo ($this->input->post('PER_APELLIDO2') ? $this->input->post('PER_APELLIDO2') : $estudiante['PER_APELLIDO2']); ?>" /></div>
	<div>PER TIPOID : <input type="text" name="PER_TIPOID" value="<?php echo ($this->input->post('PER_TIPOID') ? $this->input->post('PER_TIPOID') : $estudiante['PER_TIPOID']); ?>" /></div>
	<div>PER ID : <input type="text" name="PER_ID" value="<?php echo ($this->input->post('PER_ID') ? $this->input->post('PER_ID') : $estudiante['PER_ID']); ?>" /></div>
	<div>PER DIRECCION : <input type="text" name="PER_DIRECCION" value="<?php echo ($this->input->post('PER_DIRECCION') ? $this->input->post('PER_DIRECCION') : $estudiante['PER_DIRECCION']); ?>" /></div>
	<div>PER TELEFONO : <input type="text" name="PER_TELEFONO" value="<?php echo ($this->input->post('PER_TELEFONO') ? $this->input->post('PER_TELEFONO') : $estudiante['PER_TELEFONO']); ?>" /></div>
	<div>PER CELULAR : <input type="text" name="PER_CELULAR" value="<?php echo ($this->input->post('PER_CELULAR') ? $this->input->post('PER_CELULAR') : $estudiante['PER_CELULAR']); ?>" /></div>
	<div>PER MAIL : <input type="text" name="PER_MAIL" value="<?php echo ($this->input->post('PER_MAIL') ? $this->input->post('PER_MAIL') : $estudiante['PER_MAIL']); ?>" /></div>
	<div>PER MAILPUCE : <input type="text" name="PER_MAILPUCE" value="<?php echo ($this->input->post('PER_MAILPUCE') ? $this->input->post('PER_MAILPUCE') : $estudiante['PER_MAILPUCE']); ?>" /></div>
	<div>PER FECHANAC : <input type="text" name="PER_FECHANAC" value="<?php echo ($this->input->post('PER_FECHANAC') ? $this->input->post('PER_FECHANAC') : $estudiante['PER_FECHANAC']); ?>" /></div>
	<div>PER SEXO : <input type="text" name="PER_SEXO" value="<?php echo ($this->input->post('PER_SEXO') ? $this->input->post('PER_SEXO') : $estudiante['PER_SEXO']); ?>" /></div>
	<div>PER FOTO : <input type="text" name="PER_FOTO" value="<?php echo ($this->input->post('PER_FOTO') ? $this->input->post('PER_FOTO') : $estudiante['PER_FOTO']); ?>" /></div>
	<div>EST FECHAINGRESO : <input type="text" name="EST_FECHAINGRESO" value="<?php echo ($this->input->post('EST_FECHAINGRESO') ? $this->input->post('EST_FECHAINGRESO') : $estudiante['EST_FECHAINGRESO']); ?>" /></div>
	<div>EST FECHAESTIMADAGRADUACION : <input type="text" name="EST_FECHAESTIMADAGRADUACION" value="<?php echo ($this->input->post('EST_FECHAESTIMADAGRADUACION') ? $this->input->post('EST_FECHAESTIMADAGRADUACION') : $estudiante['EST_FECHAESTIMADAGRADUACION']); ?>" /></div>
	<div>EST FECHAGRADUACION : <input type="text" name="EST_FECHAGRADUACION" value="<?php echo ($this->input->post('EST_FECHAGRADUACION') ? $this->input->post('EST_FECHAGRADUACION') : $estudiante['EST_FECHAGRADUACION']); ?>" /></div>
	<div>EST CARRERA : <input type="text" name="EST_CARRERA" value="<?php echo ($this->input->post('EST_CARRERA') ? $this->input->post('EST_CARRERA') : $estudiante['EST_CARRERA']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>