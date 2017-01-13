<?php echo validation_errors(); ?>

<?php echo form_open('rev_dir_trab_titulacion/edit/'.$rev_dir_trab_titulacion['red_codigo']); ?>

	<div>
				Per Codigo : 
				<select name="per_codigo">
					<option value="">select profesor</option>
					<?php 
					foreach($all_profesores as $profesor)
					{
						$selected = ($profesor['per_codigo'] == $rev_dir_trab_titulacion['per_codigo']) ? ' selected="selected"' : null;

						echo '<option value="'.$profesor['per_codigo'].'" '.$selected.'>'.$profesor['per_nombre1'].'</option>';
					} 
					?>
				</select>
		</div>
	<div>Red Tipo : <input type="text" name="red_tipo" value="<?php echo ($this->input->post('red_tipo') ? $this->input->post('red_tipo') : $rev_dir_trab_titulacion['red_tipo']); ?>" /></div>
	<div>Red Fechanombramiento : <input type="text" name="red_fechanombramiento" value="<?php echo ($this->input->post('red_fechanombramiento') ? $this->input->post('red_fechanombramiento') : $rev_dir_trab_titulacion['red_fechanombramiento']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>