<?php echo validation_errors(); ?>

<?php echo form_open('modulo/edit/'.$modulo['mod_codigo']); ?>

	<div>Mod Descripcion : <input type="text" name="mod_descripcion" value="<?php echo ($this->input->post('mod_descripcion') ? $this->input->post('mod_descripcion') : $modulo['mod_descripcion']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>