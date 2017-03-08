<div id ="nav-bar">

    <div class = "logo2"><img src = "<?php echo base_url();?>assets/images/pantalla_main/logo_puce2.png"></div>
    <div class = "icono-despliegue"><img src = "<?php echo base_url();?>assets/images/pantalla_main/icono_despliegue_lista.png"></div>
    <div class = "tipo-usuario">ADMINISTRADOR</div>
    <div class = "nombre-usuario"><?php echo $this->session-> __get('rolname'); ?></div>
    <div class = "icono-usuario"><img src = "<?php echo base_url();?>assets/images/pantalla_main/icono_usuario.png"></div>


    <div class = "usuario-opciones">
        <div class = "usuario-opciones-desplegable">
            <a href="<?php echo base_url();?>login/index" id="usuario-logout"> <img src="<?php echo base_url();?>assets/images/pantalla_main/icono_logout.png"> </a>
            <div class="clear-desplegable"></div>
        </div>
    </div>
</div>





<script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );
</script>

<div id="edit-container">
    <div id="edit-titulo">Nueva Materia Sorteada por Examen</div>
<?php echo validation_errors(); ?>

<?php echo form_open('matsorteadas_x_examan/add'); ?>
    <div id="custom-lbl">Materias :
        <select name="mat_codigo"  class="edit-inp" >
            <option value="">Seleccionar Materia</option>
            <?php
            foreach($all_materias as $materia)
            {
                $selected = ($materia['mat_codigo'] == $this->input->post('mat_codigo')) ? ' selected="selected"' : null;

                echo '<option value="'.$materia['mat_codigo'].'" '.$selected.'>'.$materia['mat_nombre'].'</option>';
            }
            ?>
        </select>
    </div>
    <div id="custom-lbl">Examen complexivo :
        <select name="exa_codigo"  class="edit-inp" >
            <option value="">Seleccionar Examen Complexivo</option>
            <?php
            foreach($all_examenes as $examen)
            {
                $selected = ($examen['exa_codigo'] == $this->input->post('exa_codigo')) ? ' selected="selected"' : null;

                echo '<option value="'.$examen['exa_codigo'].'" '.$selected.'>'.$examen['exa_codigo'].'</option>';
            }
            ?>
        </select>
    </div>

    <div id="custom-lbl">Mxe Fecha 1 : <input type="text"  class="edit-inp" name="mxe_fecha_1" value="<?php echo $this->input->post('mxe_fecha_1'); ?>" /></div>
	<div id="custom-lbl">Mxe Fecha 2 : <input type="text"  class="edit-inp"  name="mxe_fecha_2" value="<?php echo $this->input->post('mxe_fecha_2'); ?>" /></div>
	<div id="custom-lbl">Mxe Nota Horal 1 : <input type="text"  class="edit-inp"  name="mxe_nota_horal_1" value="<?php echo $this->input->post('mxe_nota_horal_1'); ?>" /></div>
	<div id="custom-lbl">Mxe Nota Escrita 1 : <input type="text"  class="edit-inp"  name="mxe_nota_escrita_1" value="<?php echo $this->input->post('mxe_nota_escrita_1'); ?>" /></div>
	<div id="custom-lbl">Mxe Nota Horal 2 : <input type="text"  class="edit-inp"  name="mxe_nota_horal_2" value="<?php echo $this->input->post('mxe_nota_horal_2'); ?>" /></div>
	<div id="custom-lbl">Mxe Nota Escrita 2 : <input type="text"  class="edit-inp"  name="mxe_nota_escrita_2" value="<?php echo $this->input->post('mxe_nota_escrita_2'); ?>" /></div>

    <div id="custom-lbl" ><button type="submit" id="add-submit"></button></div>

    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <?php echo form_close(); ?>


</div>
