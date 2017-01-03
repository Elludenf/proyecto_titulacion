<?php echo validation_errors(); ?>

<?php echo form_open('carrera/edit/'.$carrera['CARR_CODIGO']); ?>

	<div>
				ESC CODIGO : 
				<select name="ESC_CODIGO">
					<option value="">select escuela</option>
					<?php 
					foreach($all_escuelas as $escuela)
					{
						$selected = ($escuela['ESC_CODIGO'] == $carrera['ESC_CODIGO']) ? ' selected="selected"' : null;

						echo '<option value="'.$escuela['ESC_CODIGO'].'" '.$selected.'>'.$escuela['ESC_CODIGO'].'</option>';
					} 
					?>
				</select>
		</div>
	<div>CARR DESCRIPCION : <input type="text" name="CARR_DESCRIPCION" value="<?php echo ($this->input->post('CARR_DESCRIPCION') ? $this->input->post('CARR_DESCRIPCION') : $carrera['CARR_DESCRIPCION']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>