<?php echo validation_errors(); ?>

<?php echo form_open('calendario/edit/'.$calendario['calcodigo']); ?>

	<div>
				Pac Codigo : 
				<select name="pac_codigo">
					<option value="">select periodo_academico</option>
					<?php 
					foreach($all_periodos_academicos as $periodo_academico)
					{
						$selected = ($periodo_academico['pac_codigo'] == $calendario['pac_codigo']) ? ' selected="selected"' : null;

						echo '<option value="'.$periodo_academico['pac_codigo'].'" '.$selected.'>'.$periodo_academico['pac_descripcion'].'</option>';
					} 
					?>
				</select>
		</div>
	<div>Calfecha : <input type="text" name="calfecha" value="<?php echo ($this->input->post('calfecha') ? $this->input->post('calfecha') : $calendario['calfecha']); ?>" /></div>
	<div>Caldiasemana : <input type="text" name="caldiasemana" value="<?php echo ($this->input->post('caldiasemana') ? $this->input->post('caldiasemana') : $calendario['caldiasemana']); ?>" /></div>
	<div>Callaborablesn : <input type="text" name="callaborablesn" value="<?php echo ($this->input->post('callaborablesn') ? $this->input->post('callaborablesn') : $calendario['callaborablesn']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>