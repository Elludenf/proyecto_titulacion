<?php echo validation_errors(); ?>

<?php echo form_open('modulo/add'); ?>

	<div>Mod Descripcion : <input type="text" name="mod_descripcion" value="<?php echo $this->input->post('mod_descripcion'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>