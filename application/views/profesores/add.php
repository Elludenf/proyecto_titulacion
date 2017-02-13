<?php echo validation_errors(); ?>

<?php echo form_open('profesor/add'); ?>


	<div>Prof Nombre1 : <input type="text" name="prof_nombre1" value="<?php echo $this->input->post('prof_nombre1'); ?>" /></div>
	<div>Prof Nombre2 : <input type="text" name="prof_nombre2" value="<?php echo $this->input->post('prof_nombre2'); ?>" /></div>
	<div>Prof Apellido1 : <input type="text" name="prof_apellido1" value="<?php echo $this->input->post('prof_apellido1'); ?>" /></div>
	<div>Prof Apellido2 : <input type="text" name="prof_apellido2" value="<?php echo $this->input->post('prof_apellido2'); ?>" /></div>
	<div>Prof Tipoid : <input type="text" name="prof_tipoid" value="<?php echo $this->input->post('prof_tipoid'); ?>" /></div>
	<div>Prof Id : <input type="text" name="prof_id" value="<?php echo $this->input->post('prof_id'); ?>" /></div>
	<div>Prof Direccion : <input type="text" name="prof_direccion" value="<?php echo $this->input->post('prof_direccion'); ?>" /></div>
	<div>Prof Telefono : <input type="text" name="prof_telefono" value="<?php echo $this->input->post('prof_telefono'); ?>" /></div>
	<div>Prof Celular : <input type="text" name="prof_celular" value="<?php echo $this->input->post('prof_celular'); ?>" /></div>
	<div>Prof Mail : <input type="text" name="prof_mail" value="<?php echo $this->input->post('prof_mail'); ?>" /></div>
	<div>Prof Mailpuce : <input type="text" name="prof_mailpuce" value="<?php echo $this->input->post('prof_mailpuce'); ?>" /></div>
	<div>Prof Fechanac : <input type="text" name="prof_fechanac" value="<?php echo $this->input->post('prof_fechanac'); ?>" /></div>
	<div>Prof Sexo : <input type="text" name="prof_sexo" value="<?php echo $this->input->post('prof_sexo'); ?>" /></div>
	<div>Prof Foto : <input type="text" name="prof_foto" value="<?php echo $this->input->post('prof_foto'); ?>" /></div>
	<div>Prof Oficina : <input type="text" name="prof_oficina" value="<?php echo $this->input->post('prof_oficina'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>