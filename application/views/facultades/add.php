<?php echo validation_errors(); ?>

<?php echo form_open('facultades/add'); ?>

	<div>Facu Descripcion : <input type="text" name="facu_descripcion" value="<?php echo $this->input->post('facu_descripcion'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>