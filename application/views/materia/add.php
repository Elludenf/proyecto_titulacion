<?php echo validation_errors(); ?>

<?php echo form_open('materia/add'); ?>

	<div>Mat Nombre : <input type="text" name="mat_nombre" value="<?php echo $this->input->post('mat_nombre'); ?>" /></div>
	<div>Mat Nivel : <input type="text" name="mat_nivel" value="<?php echo $this->input->post('mat_nivel'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>