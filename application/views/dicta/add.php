<?php echo validation_errors(); ?>

<?php echo form_open('dicta/add'); ?>
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
	<div>Materia :
		<select name="mat_codigo">
			<option value="">seleccionar una materia</option>
			<?php
			foreach ($all_materias as $materia)
			{
				$selected = ($materia['mat_codigo'] == $this->input->post('mat_codigo')) ? ' selected="selected"' : null;
				echo '<option value="'.$materia['mat_codigo'].'" '.$selected.'>'.$materia['mat_nombre'].'</option>';
			}
			?>
		</select>
	</div>
	<button type="submit">Save</button>

<?php echo form_close(); ?>