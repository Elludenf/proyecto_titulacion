<?php echo validation_errors(); ?>

<?php echo form_open('periodos_academicos2/edit/'.$periodos_academicos2['pac_codigo']); ?>

	<div>Pac Descripcion : <input type="text" name="pac_descripcion" value="<?php echo ($this->input->post('pac_descripcion') ? $this->input->post('pac_descripcion') : $periodos_academicos2['pac_descripcion']); ?>" /></div>
	<div>Pac Fechainicio : <input type="text" name="pac_fechainicio" value="<?php echo ($this->input->post('pac_fechainicio') ? $this->input->post('pac_fechainicio') : $periodos_academicos2['pac_fechainicio']); ?>" /></div>
	<div>Pac Fechafinal : <input type="text" name="pac_fechafinal" value="<?php echo ($this->input->post('pac_fechafinal') ? $this->input->post('pac_fechafinal') : $periodos_academicos2['pac_fechafinal']); ?>" /></div>
	<div>Pac Perido : <input type="text" name="pac_perido" value="<?php echo ($this->input->post('pac_perido') ? $this->input->post('pac_perido') : $periodos_academicos2['pac_perido']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>