<?php echo validation_errors(); ?>

<?php echo form_open('materia_x_plan_de_estudio/add'); ?>
    <div>Plan de Estudio :
        <select name="plan_de_estudio">
            <option value="">seleccionar plan de estudio</option>
            <?php
            foreach ($all_planes as $plan)
            {
                $selected = ($plan['plan_codigo'] == $this->input->post('plan_codigo')) ? ' selected="selected"' : null;
                 echo '<option value="'.$plan['plan_codigo'].'" '.$selected.'>'.$plan['plan_descripcion'].'</option>';
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

    <div>Periodo académico :
        <select name="pac_codigo">
            <option value="">seleccionar un periodo academico</option>
            <?php
            foreach ($all_pac as $pac)
            {
                $selected = ($pac['pac_codigo'] == $this->input->post('pac_codigo')) ? ' selected="selected"' : null;
                echo '<option value="'.$pac['pac_codigo'].'" '.$selected.'>'.$pac['pac_descripcion'].'</option>';
            }
            ?>
        </select>
    </div>
    <button type="submit">Save</button>

<?php echo form_close(); ?>