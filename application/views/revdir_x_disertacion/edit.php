<?php echo validation_errors(); ?>

<?php echo form_open('revdir_x_disertacion/edit/'.$revdir_x_disertacion['dis_codigo'].'/'.$revdir_x_disertacion['prof_codigo']); ?>

    <div>Trabajo Disertacion: <?php echo $trabajo['dis_titulo']?></div>
	<div>Profesor :
		<select name="prof_codigo">
			<option value="">select profesor</option>
			<?php
			foreach($all_profesores as $profesor)
			{
				$selected = ($profesor['prof_codigo'] == $revdir_x_disertacion['prof_codigo']) ? ' selected="selected"' : null;

				echo '<option value="'.$profesor['prof_codigo'].'" '.$selected.'>'.$profesor['prof_apellido1'].$profesor['prof_nombre1'].'</option>';
			}
			?>
		</select>
	</div>
	<div>Rxd Tipo :
		<select name="rxd_tipo">
			<option value="">Seleccione Tipo Responsable</option>
			<?php

			echo '<option value="DIR">Director</option>';
			echo '<option value="R_1">Revisor I</option>';
			echo '<option value="R_2">Revisor II</option>';

			?>
		</select>
	</div>
	<div>Rxd Fechanombramiento : <input type="text" name="rxd_fechanombramiento" value="<?php echo ($this->input->post('rxd_fechanombramiento') ? $this->input->post('rxd_fechanombramiento') : $revdir_x_disertacion['rxd_fechanombramiento']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>