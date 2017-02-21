<?php echo validation_errors(); ?>

<?php echo form_open('matsorteadas_x_examan/add'); ?>
    <div>Materias :
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
    <div>Examen complexivo :
        <select name="exa_codigo">
            <option value="">select examen complexivo</option>
            <?php
            foreach($all_examenes as $examen)
            {
                $selected = ($examen['exa_codigo'] == $this->input->post('exa_codigo')) ? ' selected="selected"' : null;

                echo '<option value="'.$examen['exa_codigo'].'" '.$selected.'>'.$examen['exa_codigo'].'</option>';
            }
            ?>
        </select>
    </div>

    <div>Mxe Fecha 1 : <input type="text" name="mxe_fecha_1" value="<?php echo $this->input->post('mxe_fecha_1'); ?>" /></div>
	<div>Mxe Fecha 2 : <input type="text" name="mxe_fecha_2" value="<?php echo $this->input->post('mxe_fecha_2'); ?>" /></div>
	<div>Mxe Nota Horal 1 : <input type="text" name="mxe_nota_horal_1" value="<?php echo $this->input->post('mxe_nota_horal_1'); ?>" /></div>
	<div>Mxe Nota Escrita 1 : <input type="text" name="mxe_nota_escrita_1" value="<?php echo $this->input->post('mxe_nota_escrita_1'); ?>" /></div>
	<div>Mxe Nota Horal 2 : <input type="text" name="mxe_nota_horal_2" value="<?php echo $this->input->post('mxe_nota_horal_2'); ?>" /></div>
	<div>Mxe Nota Escrita 2 : <input type="text" name="mxe_nota_escrita_2" value="<?php echo $this->input->post('mxe_nota_escrita_2'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>