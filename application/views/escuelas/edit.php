<?php echo validation_errors(); ?>

<?php echo form_open('escuelas/edit/'.$escuelas['esc_codigo']); ?>

	<div>Facu Codigo : <input type="text" name="facu_codigo" value="<?php echo ($this->input->post('facu_codigo') ? $this->input->post('facu_codigo') : $escuelas['facu_codigo']); ?>" /></div>
	<div>Esc Descripcion : <input type="text" name="esc_descripcion" value="<?php echo ($this->input->post('esc_descripcion') ? $this->input->post('esc_descripcion') : $escuelas['esc_descripcion']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>