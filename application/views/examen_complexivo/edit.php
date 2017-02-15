<?php echo validation_errors(); ?>

<?php echo form_open('examen_complexivo/edit/'.$examen_complexivo['exa_codigo']); ?>

	<div>
				Est Codigo : 
				<select name="est_codigo">
					<option value="">select estudiante</option>
					<?php 
					foreach($all_estudiantes as $estudiante)
					{
						$selected = ($estudiante['est_codigo'] == $examen_complexivo['est_codigo']) ? ' selected="selected"' : null;

						echo '<option value="'.$estudiante['est_codigo'].'" '.$selected.'>'.$estudiante['est_nombre1'].'</option>';
					} 
					?>
				</select>
		</div>
	<div>Exa Fechainicio : <input type="text" name="exa_fechainicio" value="<?php echo ($this->input->post('exa_fechainicio') ? $this->input->post('exa_fechainicio') : $examen_complexivo['exa_fechainicio']); ?>" /></div>
	<div>Exa Estado : <input type="text" name="exa_estado" value="<?php echo ($this->input->post('exa_estado') ? $this->input->post('exa_estado') : $examen_complexivo['exa_estado']); ?>" /></div>
	<div>Exa Horas Docencia : <input type="text" name="exa_horas_docencia" value="<?php echo ($this->input->post('exa_horas_docencia') ? $this->input->post('exa_horas_docencia') : $examen_complexivo['exa_horas_docencia']); ?>" /></div>
	<div>Exa Horas Autonomas : <input type="text" name="exa_horas_autonomas" value="<?php echo ($this->input->post('exa_horas_autonomas') ? $this->input->post('exa_horas_autonomas') : $examen_complexivo['exa_horas_autonomas']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>