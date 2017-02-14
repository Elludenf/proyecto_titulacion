<?php echo validation_errors(); ?>

<?php echo form_open('revdir_x_disertacion/add'); ?>
    <div>Profesor :
        <select name="prof_codigo">
            <option value="">select profesor</option>
            <?php
            foreach($all_profesores as $profesor)
            {
                $selected = ($profesor['prof_codigo'] == $this->input->post('prof_codigo')) ? ' selected="selected"' : null;

                echo '<option value="'.$profesor['prof_codigo'].'" '.$selected.'>'.$profesor['prof_apellido1'].$profesor['prof_nombre1'].'</option>';
            }
            ?>
        </select>
    </div>
	<div>Trabajo Disertacion :
		<select name="dis_codigo">
			<option value="">select disertacion</option>
			<?php
			foreach($all_trabajos as $trabajo_disertacion)
			{
				$selected = ($trabajo_disertacion['dis_codigo'] == $this->input->post('dis_codigo')) ? ' selected="selected"' : null;

				echo '<option value="'.$trabajo_disertacion['dis_codigo'].'" '.$selected.'>'.$trabajo_disertacion['dis_titulo'].'</option>';
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
	<div>Rxd Fechanombramiento : <input type="text" name="rxd_fechanombramiento" value="<?php echo $this->input->post('rxd_fechanombramiento'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>