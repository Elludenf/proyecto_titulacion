<?php echo validation_errors(); ?>

<?php echo form_open('responsable_titulacion/edit/'.$responsable_titulacion['res_codigo']); ?>

	<div>
				Per Codigo : 
				<select name="per_codigo">
					<option value="">select profesor</option>
					<?php 
					foreach($all_profesores as $profesor)
					{
						$selected = ($profesor['per_codigo'] == $responsable_titulacion['per_codigo']) ? ' selected="selected"' : null;

						echo '<option value="'.$profesor['per_codigo'].'" '.$selected.'>'.$profesor['per_nombre1'].' '.$profesor['per_apellido1'].'</option>';
					} 
					?>
				</select>
		</div>
	<div>Res Tipo : <input type="text" name="res_tipo" value="<?php echo ($this->input->post('res_tipo') ? $this->input->post('res_tipo') : $responsable_titulacion['res_tipo']); ?>" /></div>
	<div>Res Fechanombramiento : <input type="text" name="res_fechanombramiento" value="<?php echo ($this->input->post('res_fechanombramiento') ? $this->input->post('res_fechanombramiento') : $responsable_titulacion['res_fechanombramiento']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>