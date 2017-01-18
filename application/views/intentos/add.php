<?php echo validation_errors(); ?>

<?php echo form_open('intento/add'); ?>

	<div>
				Exa Codigo : 
				<select name="exa_codigo">
					<option value="">select examen_complexivo</option>
					<?php 
					foreach($all_examen_complexivo as $examen_complexivo)
					{
						$selected = ($examen_complexivo['exa_codigo'] == $this->input->post('exa_codigo')) ? ' selected="selected"' : null;

						echo '<option value="'.$examen_complexivo['exa_codigo'].'" '.$selected.'>'.$examen_complexivo['exa_codigo'].'</option>';
					} 
					?>
				</select>
		</div>
	<div>Int Fechaint : <input type="text" name="int_fechaint" value="<?php echo $this->input->post('int_fechaint'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>