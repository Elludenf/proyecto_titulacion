<?php echo validation_errors(); ?>

<?php echo form_open('responsable_titulacion/add'); ?>

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
	<div>
		Res Tipo :
		<select name="res_tipo">
			<option value="">Seleccione Tipo Responsable</option>
			<?php
				echo '<option value="R1">Responsable Titulacion I</option>';
				echo '<option value="R2">Responsable Titulacion II</option>';
			?>
		</select>
	</div>

	<div>Res Fechanombramiento : <input type="text" name="res_fechanombramiento" value="<?php echo $this->input->post('res_fechanombramiento'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>