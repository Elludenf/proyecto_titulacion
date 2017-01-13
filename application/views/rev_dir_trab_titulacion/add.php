<?php echo validation_errors(); ?>

<?php echo form_open('rev_dir_trab_titulacion/add'); ?>

	<div>
				Per Codigo : 
				<select name="per_codigo">
					<option value="">select profesor</option>
					<?php 
					foreach($all_profesores as $profesor)
					{
						$selected = ($profesor['per_codigo'] == $this->input->post('per_codigo')) ? ' selected="selected"' : null;

						echo '<option value="'.$profesor['per_codigo'].'" '.$selected.'>'.$profesor['per_nombre1'].'</option>';
					} 
					?>
				</select>
		</div>
	<div>Red Tipo : <select name="red_tipo">
			<option value="">Seleccione Tipo Revisor/Director</option>
			<?php
				echo '<option value="R_1">Revisor I</option>';
				echo '<option value="R_2">Revisor II</option>';
				echo '<option value="DIR">Director</option>';

			?>
		</select></div>
	<div>Red Fechanombramiento : <input type="text" name="red_fechanombramiento" value="<?php echo $this->input->post('red_fechanombramiento'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>