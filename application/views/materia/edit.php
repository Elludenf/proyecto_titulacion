<?php echo validation_errors(); ?>

<?php echo form_open('materia/edit/'.$materia['mat_codigo']); ?>

	<div>Mat Nombre : <input type="text" name="mat_nombre" value="<?php echo ($this->input->post('mat_nombre') ? $this->input->post('mat_nombre') : $materia['mat_nombre']); ?>" /></div>
	<div>Mat Nivel : <input type="text" name="mat_nivel" value="<?php echo ($this->input->post('mat_nivel') ? $this->input->post('mat_nivel') : $materia['mat_nivel']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>