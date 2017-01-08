<?php echo validation_errors(); ?>

<?php echo form_open('responsables_titulacion/edit/'.$responsables_titulacion['res_codigo']); ?>

	<div>
				Per Codigo : 
				<select name="per_codigo">
					<option value="">select profesor</option>
					<?php 
					foreach($all_profesor as $profesor)
					{
						$selected = ($profesor['per_codigo'] == $responsables_titulacion['per_codigo']) ? ' selected="selected"' : null;

						echo '<option value="'.$profesor['per_codigo'].'" '.$selected.'>'.$profesor['per_codigo'].'</option>';
					} 
					?>
				</select>
		</div>
	<div>Res Tipo : <input type="text" name="res_tipo" value="<?php echo ($this->input->post('res_tipo') ? $this->input->post('res_tipo') : $responsables_titulacion['res_tipo']); ?>" /></div>
	<div>Res Fechanombramiento : <input type="text" name="res_fechanombramiento" value="<?php echo ($this->input->post('res_fechanombramiento') ? $this->input->post('res_fechanombramiento') : $responsables_titulacion['res_fechanombramiento']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>