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
    <div id="edit-titulo">Nuevo Trabajo de Disertacion</div>
    <?php if(validation_errors() == true) {?>

        <div id="val_errors"  title="Error"> <?php echo validation_errors(); ?></div>

    <?php  }?>

<?php echo form_open('trabajo_disertacion/add'); ?>

	<div  id="custom-lbl" >Fecha de Inicio : <input type="date" class="edit-inp" name="dis_fechainicio" value="<?php echo $this->input->post('dis_fechainicio'); ?>" /></div>
	<div  id="custom-lbl" >Fecha de Presentacion del Plan : <input type="date" class="edit-inp" name="dis_fechapresentacionplan" value="<?php echo $this->input->post('dis_fechapresentacionplan'); ?>" /></div>
	<div  id="custom-lbl" >Fecha de Aprobacion : <input type="date" class="edit-inp" name="dis_fechaaprobacion" value="<?php echo $this->input->post('dis_fechaaprobacion'); ?>" /></div>
	<div  id="custom-lbl" >Titulo : <input type="text" class="edit-inp" name="dis_titulo" value="<?php echo $this->input->post('dis_titulo'); ?>" /></div>
	<div  id="custom-lbl" >Estado : <input type="checkbox" class="edit-inp" name="dis_estado" value="1" value="<?php echo $this->input->post('dis_estado'); ?>" /></div>
	<div  id="custom-lbl" >Fecha de Fin : <input type="date" class="edit-inp" name="dis_fechafin" value="<?php echo $this->input->post('dis_fechafin'); ?>" /></div>
	<div  id="custom-lbl" >Defensa : <input type="text" class="edit-inp" name="dis_defensa" value="<?php echo $this->input->post('dis_defensa'); ?>" /></div>

    <div id="custom-lbl" ><button type="submit" id="add-submit"></button></div>

    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <?php echo form_close(); ?>


</div>
