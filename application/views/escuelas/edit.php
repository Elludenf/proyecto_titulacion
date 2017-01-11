<?php echo validation_errors(); ?>

<?php echo form_open('escuela/edit/'.$escuela['esc_codigo']); ?>

	<div>
				Facu Codigo : 
				<select name="facu_codigo">
					<option value="">select facultad</option>
					<?php 
					foreach($all_facultades as $facultad)
					{
						$selected = ($facultad['facu_codigo'] == $escuela['facu_codigo']) ? ' selected="selected"' : null;

						echo '<option value="'.$facultad['facu_codigo'].'" '.$selected.'>'.$facultad['facu_descripcion'].'</option>';
					} 
					?>
				</select>
		</div>
	<div>Esc Descripcion : <input type="text" name="esc_descripcion" value="<?php echo ($this->input->post('esc_descripcion') ? $this->input->post('esc_descripcion') : $escuela['esc_descripcion']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>