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
    <div id="edit-titulo">Nueva materia aprobada por estudiante</div>
<?php echo validation_errors(); ?>

<?php echo form_open('mat_ap_x_est/add'); ?>
    <div  id="custom-lbl" >Materia :
        <select name="mat_codigo" class="edit-inp">
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

    <div  id="custom-lbl" >Estudiante :
        <select name="est_codigo" class="edit-inp">
            <option value="">Seleccionar Estudiante</option>
            <?php
            foreach($all_estudiantes as $estudiante)
            {
                $selected = ($estudiante['est_codigo'] == $this->input->post('est_codigo')) ? ' selected="selected"' : null;

                echo '<option value="'.$estudiante['est_codigo'].'" '.$selected.'>'.$estudiante['est_apellido1'].$estudiante['est_nombre1'].'</option>';
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
