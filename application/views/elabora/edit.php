<?php echo validation_errors(); ?>

<?php echo form_open('elabora/edit/'.$elabora['est_codigo']); ?>

    <div>Estudiante: <?php echo $estudiante['est_apellido1'].$estudiante['est_apellido2'].$estudiante['est_nombre1'].$estudiante['est_nombre2']?></div>
    <div>Trabajo Disertacion :
        <select name="dis_codigo">
            <option value="">select disertacion</option>
            <?php
            foreach($all_trabajos as $trabajo_disertacion)
            {
                $selected = ($trabajo_disertacion['dis_codigo'] == $elabora['dis_codigo']) ? ' selected="selected"' : null;

                echo '<option value="'.$trabajo_disertacion['dis_codigo'].'" '.$selected.'>'.$trabajo_disertacion['dis_titulo'].'</option>';
            }
            ?>
        </select>
    </div>
	<div>Elb Nota Horal : <input type="text" name="elb_nota_horal" value="<?php echo ($this->input->post('elb_nota_horal') ? $this->input->post('elb_nota_horal') : $elabora['elb_nota_horal']); ?>" /></div>
	<div>Elb Nota Escrito : <input type="text" name="elb_nota_escrito" value="<?php echo ($this->input->post('elb_nota_escrito') ? $this->input->post('elb_nota_escrito') : $elabora['elb_nota_escrito']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>