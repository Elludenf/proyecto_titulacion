<div id ="nav-bar">

    <div class = "logo2"><img src = "<?php echo base_url();?>assets/images/pantalla_main/logo_puce2.png"></div>
    <div class = "icono-despliegue"><img src = "<?php echo base_url();?>assets/images/pantalla_main/icono_despliegue_lista.png"></div>
    <div class = "tipo-usuario">ADMINISTRADOR</div>
    <div class = "nombre-usuario">ADMINISTRADOR</div>
    <div class = "icono-usuario"><img src = "<?php echo base_url();?>assets/images/pantalla_main/icono_usuario.png"></div>


    <div class = "usuario-opciones">
        <div class = "usuario-opciones-desplegable">
            <a href="" id="usuario-logout"> <img src="<?php echo base_url();?>assets/images/pantalla_main/icono_logout.png"> </a>
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
    <div id="edit-titulo">Nueva Materia por Plan de Estudio</div>
<?php echo validation_errors(); ?>

<?php echo form_open('materia_x_plan_de_estudio/add'); ?>
    <div id="custom-lbl" >Plan de Estudio :
        <select name="plan_codigo"  class="edit-inp" class="edit-inp">
            <option value="">Seleccionar Plan de Estudio</option>
            <?php
            foreach ($all_planes as $plan)
            {
                $selected = ($plan['plan_codigo'] == $this->input->post('plan_codigo')) ? ' selected="selected"' : null;
                 echo '<option value="'.$plan['plan_codigo'].'" '.$selected.'>'.$plan['plan_descripcion'].'</option>';
            }
            ?>
        </select>
    </div>
	<div id="custom-lbl" >Materia :
        <select name="mat_codigo"  class="edit-inp">
            <option value="">Seleccionar Materia</option>
            <?php
            foreach ($all_materias as $materia)
            {
                $selected = ($materia['mat_codigo'] == $this->input->post('mat_codigo')) ? ' selected="selected"' : null;
                echo '<option value="'.$materia['mat_codigo'].'" '.$selected.'>'.$materia['mat_nombre'].'</option>';
            }
            ?>
        </select>
    </div>

    <div id="custom-lbl" >Periodo académico :
        <select name="pac_codigo"  class="edit-inp">
            <option value="">Seleccionar Periodo Academico</option>
            <?php
            foreach ($all_pac as $pac)
            {
                $selected = ($pac['pac_codigo'] == $this->input->post('pac_codigo')) ? ' selected="selected"' : null;
                echo '<option value="'.$pac['pac_codigo'].'" '.$selected.'>'.$pac['pac_descripcion'].'</option>';
            }
            ?>
        </select>
    </div>
    <div id="custom-lbl" ><button type="submit" id="add-submit"></button></div>

    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <?php echo form_close(); ?>


</div>
