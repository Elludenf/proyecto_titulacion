<?php echo validation_errors(); ?>

<?php echo form_open('carrera/add'); ?>

	<div>
				Esc Codigo : 
				<select name="esc_codigo">
					<option value="">select escuela</option>
					<?php 
					foreach($all_escuelas as $escuela)
					{
						$selected = ($escuela['esc_codigo'] == $this->input->post('esc_codigo')) ? ' selected="selected"' : null;

						echo '<option value="'.$escuela['esc_codigo'].'" '.$selected.'>'.$escuela['esc_descripcion'].'</option>';
					} 
					?>
				</select>
		</div>
	<div>Carr Descripcion : <input type="text" name="carr_descripcion" value="<?php echo $this->input->post('carr_descripcion'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>