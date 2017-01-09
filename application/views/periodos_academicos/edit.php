<?php echo validation_errors(); ?>

<?php echo form_open('periodos_academicos/edit/'.$periodo_academico['pac_codigo']); ?>

	<div>Pac Descripcion : <input type="text" name="pac_descripcion" value="<?php echo ($this->input->post('pac_descripcion') ? $this->input->post('pac_descripcion') : $periodo_academico['pac_descripcion']); ?>" /></div>
	<div>Pac Fechainicio : <input type="text" name="pac_fechainicio" value="<?php echo ($this->input->post('pac_fechainicio') ? $this->input->post('pac_fechainicio') : $periodo_academico['pac_fechainicio']); ?>" /></div>
	<div>Pac Fechafinal : <input type="text" name="pac_fechafinal" value="<?php echo ($this->input->post('pac_fechafinal') ? $this->input->post('pac_fechafinal') : $periodo_academico['pac_fechafinal']); ?>" /></div>
	<div>Pac Perido : <input type="text" name="pac_perido" value="<?php echo ($this->input->post('pac_perido') ? $this->input->post('pac_perido') : $periodo_academico['pac_perido']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>