<?php echo validation_errors();?>

<?php echo form_open('facultades/edit/'.$facultades['facu_codigo']); ?>

	<div>Facu Descripcion : <input type="text" name="facu_descripcion" value="<?php echo ($this->input->post('facu_descripcion') ? $this->input->post('facu_descripcion') : $facultades['facu_descripcion']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>