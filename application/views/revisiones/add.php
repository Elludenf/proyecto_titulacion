<?php echo validation_errors(); ?>

<?php echo form_open('revision/add'); ?>

	<div>
				Dis Codigo : 
				<select name="dis_codigo">
					<option value="">select trabajo_disertacion</option>
					<?php 
					foreach($all_trabajos_disertacion as $trabajo_disertacion)
					{
						$selected = ($trabajo_disertacion['dis_codigo'] == $this->input->post('dis_codigo')) ? ' selected="selected"' : null;

						echo '<option value="'.$trabajo_disertacion['dis_codigo'].'" '.$selected.'>'.$trabajo_disertacion['dis_titulo'].'</option>';
					} 
					?>
				</select>
		</div>
	<div>Red Codigo : <input type="text" name="red_codigo" value="<?php echo $this->input->post('red_codigo'); ?>" /></div>
	<div>Obs Fecha : <input type="text" name="obs_fecha" value="<?php echo $this->input->post('obs_fecha'); ?>" /></div>
	<div>Obs Descripcion : <input type="text" name="obs_descripcion" value="<?php echo $this->input->post('obs_descripcion'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>