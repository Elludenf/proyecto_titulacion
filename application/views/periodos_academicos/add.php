<div id ="nav-bar">

    <div class = "logo2"><img src = "<?php echo base_url();?>assets/images/pantalla_main/logo_puce2.png"></div>
    <div class = "icono-despliegue"><img src = "<?php echo base_url();?>assets/images/pantalla_main/icono_despliegue_lista.png"></div>
    <div class = "tipo-usuario"><?php echo $this->session-> __get('tipo_usuario');?></div>
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
    <div id="edit-titulo">Nuevo Periodo Academico</div>
<?php echo validation_errors(); ?>

<?php echo form_open('periodos_academicos/add'); ?>

	<div id="custom-lbl">Pac Descripcion : <input type="text" class="edit-inp" name="pac_descripcion" value="<?php echo $this->input->post('pac_descripcion'); ?>" /></div>
	<div id="custom-lbl">Pac Fechainicio : <input type="text" class="edit-inp" name="pac_fechainicio" value="<?php echo $this->input->post('pac_fechainicio'); ?>" /></div>
	<div id="custom-lbl">Pac Fechafinal : <input type="text" class="edit-inp" name="pac_fechafinal" value="<?php echo $this->input->post('pac_fechafinal'); ?>" /></div>
	<div id="custom-lbl">Pac Perido : <input type="text" class="edit-inp" name="pac_perido" value="<?php echo $this->input->post('pac_perido'); ?>" /></div>

    <div id="custom-lbl" ><button type="submit" id="add-submit"></button></div>

    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <?php echo form_close(); ?>


</div>
