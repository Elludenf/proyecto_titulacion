<?php echo validation_errors(); ?>

<?php echo form_open('examen_complexivo/edit/'.$examen_complexivo['exa_codigo']); ?>

	<div>
				Per Codigo : 
				<select name="per_codigo">
					<option value="">select estudiante</option>
					<?php 
					foreach($all_estudiante as $estudiante)
					{
						$selected = ($estudiante['per_codigo'] == $examen_complexivo['per_codigo']) ? ' selected="selected"' : null;

						echo '<option value="'.$estudiante['per_codigo'].'" '.$selected.'>'.$estudiante['per_nombre1'].'</option>';
					} 
					?>
				</select>
		</div>
	<div>Exa Fechainicio : <input type="text" name="exa_fechainicio" value="<?php echo ($this->input->post('exa_fechainicio') ? $this->input->post('exa_fechainicio') : $examen_complexivo['exa_fechainicio']); ?>" /></div>
	<div>Exa Estado : <input type="text" name="exa_estado" value="<?php echo ($this->input->post('exa_estado') ? $this->input->post('exa_estado') : $examen_complexivo['exa_estado']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>