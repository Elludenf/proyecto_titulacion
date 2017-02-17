<?php echo validation_errors(); ?>

<?php echo form_open('mat_ap_x_est/add'); ?>
    <div>Materia :
        <select name="mat_codigo">
            <option value="">select materia</option>
            <?php
            foreach($all_materias as $materia)
            {
                $selected = ($materia['mat_codigo'] == $this->input->post('mat_codigo')) ? ' selected="selected"' : null;

                echo '<option value="'.$materia['mat_codigo'].'" '.$selected.'>'.$materia['mat_nombre'].'</option>';
            }
            ?>
        </select>
    </div>

    <div>Estudiante :
        <select name="est_codigo">
            <option value="">select estudiante</option>
            <?php
            foreach($all_estudiantes as $estudiante)
            {
                $selected = ($estudiante['est_codigo'] == $this->input->post('est_codigo')) ? ' selected="selected"' : null;

                echo '<option value="'.$estudiante['est_codigo'].'" '.$selected.'>'.$estudiante['est_apellido1'].$estudiante['est_nombre1'].'</option>';
            }
            ?>
        </select>
    </div>
	<button type="submit">Save</button>

<?php echo form_close(); ?>