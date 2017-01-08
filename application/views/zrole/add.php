<?php echo validation_errors(); ?>

<?php echo form_open('zrole/add'); ?>

	<div>ZrolCodigo : <input type="text" name="zrolcodigo" value="<?php echo $this->input->post('zrolcodigo'); ?>" /></div>
	<div>Zroldescripcion : <input type="text" name="zroldescripcion" value="<?php echo $this->input->post('zroldescripcion'); ?>" /></div>
	<button type="submit">Save</button>

<?php echo form_close(); ?>