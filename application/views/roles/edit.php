<?php echo validation_errors(); ?>

<?php echo form_open('rol/edit/'.$rol['rol_codigo']); ?>

	<div>Rol Descripcion : <input type="text" name="rol_descripcion" value="<?php echo ($this->input->post('rol_descripcion') ? $this->input->post('rol_descripcion') : $rol['rol_descripcion']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>