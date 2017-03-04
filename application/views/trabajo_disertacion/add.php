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
    <div id="edit-titulo">Nuevo Trabajo de Disertacion</div>
<?php echo validation_errors(); ?>

<?php echo form_open('trabajo_disertacion/add'); ?>

	<div  id="custom-lbl" >Dis Fechainicio : <input type="text" class="edit-inp" name="dis_fechainicio" value="<?php echo $this->input->post('dis_fechainicio'); ?>" /></div>
	<div  id="custom-lbl" >Dis Fechapresentacionplan : <input type="text" class="edit-inp" name="dis_fechapresentacionplan" value="<?php echo $this->input->post('dis_fechapresentacionplan'); ?>" /></div>
	<div  id="custom-lbl" >Dis Fechaaprobacion : <input type="text" class="edit-inp" name="dis_fechaaprobacion" value="<?php echo $this->input->post('dis_fechaaprobacion'); ?>" /></div>
	<div  id="custom-lbl" >Dis Titulo : <input type="text" class="edit-inp" name="dis_titulo" value="<?php echo $this->input->post('dis_titulo'); ?>" /></div>
	<div  id="custom-lbl" >Dis Estado : <input type="checkbox" class="edit-inp" name="dis_estado" value="1" value="<?php echo $this->input->post('dis_estado'); ?>" /></div>
	<div  id="custom-lbl" >Dis Fechafin : <input type="text" class="edit-inp" name="dis_fechafin" value="<?php echo $this->input->post('dis_fechafin'); ?>" /></div>
	<div  id="custom-lbl" >Dis Defensa : <input type="text" class="edit-inp" name="dis_defensa" value="<?php echo $this->input->post('dis_defensa'); ?>" /></div>

    <div id="custom-lbl" ><button type="submit" id="add-submit"></button></div>

    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <?php echo form_close(); ?>


</div>
