<?php echo validation_errors(); ?>

<?php echo form_open('carrera/add'); ?>

	<div>Esc Codigo : <input type="text" name="esc_codigo" value="<?php echo $this->input->post('esc_codigo'); ?>" /></div>
	<div>Carr Descripcion : <input type="text" name="carr_descripcion" value="<?php echo $this->input->post('carr_descripcion'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>