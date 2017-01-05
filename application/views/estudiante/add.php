<?php echo validation_errors(); ?>

<?php echo form_open('estudiante/add'); ?>

	<div>Per Nombre1 : <input type="text" name="per_nombre1" value="<?php echo $this->input->post('per_nombre1'); ?>" /></div>
	<div>Per Nombre2 : <input type="text" name="per_nombre2" value="<?php echo $this->input->post('per_nombre2'); ?>" /></div>
	<div>Per Apellido1 : <input type="text" name="per_apellido1" value="<?php echo $this->input->post('per_apellido1'); ?>" /></div>
	<div>Per Apellido2 : <input type="text" name="per_apellido2" value="<?php echo $this->input->post('per_apellido2'); ?>" /></div>
	<div>Per Tipoid : <input type="text" name="per_tipoid" value="<?php echo $this->input->post('per_tipoid'); ?>" /></div>
	<div>Per Id : <input type="text" name="per_id" value="<?php echo $this->input->post('per_id'); ?>" /></div>
	<div>Per Direccion : <input type="text" name="per_direccion" value="<?php echo $this->input->post('per_direccion'); ?>" /></div>
	<div>Per Telefono : <input type="text" name="per_telefono" value="<?php echo $this->input->post('per_telefono'); ?>" /></div>
	<div>Per Celular : <input type="text" name="per_celular" value="<?php echo $this->input->post('per_celular'); ?>" /></div>
	<div>Per Mail : <input type="text" name="per_mail" value="<?php echo $this->input->post('per_mail'); ?>" /></div>
	<div>Per Mailpuce : <input type="text" name="per_mailpuce" value="<?php echo $this->input->post('per_mailpuce'); ?>" /></div>
	<div>Per Fechanac : <input type="text" name="per_fechanac" value="<?php echo $this->input->post('per_fechanac'); ?>" /></div>
	<div>Per Sexo : <input type="text" name="per_sexo" value="<?php echo $this->input->post('per_sexo'); ?>" /></div>
	<div>Per Foto : <input type="text" name="per_foto" value="<?php echo $this->input->post('per_foto'); ?>" /></div>
	<div>Est Fechaingreso : <input type="text" name="est_fechaingreso" value="<?php echo $this->input->post('est_fechaingreso'); ?>" /></div>
	<div>Est Fechaestimadagraduacion : <input type="text" name="est_fechaestimadagraduacion" value="<?php echo $this->input->post('est_fechaestimadagraduacion'); ?>" /></div>
	<div>Est Fechagraduacion : <input type="text" name="est_fechagraduacion" value="<?php echo $this->input->post('est_fechagraduacion'); ?>" /></div>
	<div>Est Carrera : <input type="text" name="est_carrera" value="<?php echo $this->input->post('est_carrera'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>