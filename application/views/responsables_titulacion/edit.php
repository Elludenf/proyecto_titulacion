<?php echo validation_errors(); ?>

<?php echo form_open('responsables_titulacion/edit/'.$responsables_titulacion['res_codigo']); ?>

	<div>
		Prof Codigo :
		<select name="prof_codigo">
			<option value="">select profesor</option>
			<?php
			foreach($all_profesores as $profesor)
			{
				$selected = ($profesor['prof_codigo'] == $responsables_titulacion['prof_codigo']) ? ' selected="selected"' : null;

				echo '<option value="'.$profesor['prof_codigo'].'" '.$selected.'>'.$profesor['prof_nombre1'].$profesor['prof_apellido1'].'</option>';
			}
			?>
		</select>
		</div>
	<div>Res Tipo : <select name="res_tipo">
			<option value="">Seleccione Tipo Responsable</option>
			<?php
			echo '<option value="R1">Responsable Titulacion I</option>';
			echo '<option value="R2">Responsable Titulacion II</option>';
			$selected=$responsables_titulacion['res_tipo'];
			?>
		</select></div>
	<div>Res Fechanombramiento : <input type="text" name="res_fechanombramiento" value="<?php echo ($this->input->post('res_fechanombramiento') ? $this->input->post('res_fechanombramiento') : $responsables_titulacion['res_fechanombramiento']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>