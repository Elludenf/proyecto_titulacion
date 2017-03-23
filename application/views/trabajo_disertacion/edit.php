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
    <div id="edit-titulo">Modificar Trabajo de Disertacion</div>
    <?php if(validation_errors() == true) {?>

        <div id="val_errors"  title="Error"> <?php echo validation_errors(); ?></div>

    <?php  }?>

<?php echo form_open('trabajo_disertacion/edit/'.$trabajo_disertacion['dis_codigo']); ?>

	<div id="custom-lbl" >Fecha de Inicio : <input type="date" class="edit-inp" name="dis_fechainicio" value="<?php echo ($this->input->post('dis_fechainicio') ? $this->input->post('dis_fechainicio') : $trabajo_disertacion['dis_fechainicio']); ?>" /></div>
	<div id="custom-lbl" >Fecha de Presentacion del Plan : <input type="date" class="edit-inp" name="dis_fechapresentacionplan" value="<?php echo ($this->input->post('dis_fechapresentacionplan') ? $this->input->post('dis_fechapresentacionplan') : $trabajo_disertacion['dis_fechapresentacionplan']); ?>" /></div>
	<div id="custom-lbl" >Fecha de Aprobacion : <input type="date" class="edit-inp" name="dis_fechaaprobacion" value="<?php echo ($this->input->post('dis_fechaaprobacion') ? $this->input->post('dis_fechaaprobacion') : $trabajo_disertacion['dis_fechaaprobacion']); ?>" /></div>
	<div id="custom-lbl" >Titulo : <input type="text" class="edit-inp" name="dis_titulo" value="<?php echo ($this->input->post('dis_titulo') ? $this->input->post('dis_titulo') : $trabajo_disertacion['dis_titulo']); ?>" /></div>
	<div id="custom-lbl" >Estado : <input type="checkbox" class="edit-inp" name="dis_estado" value="1" <?php echo ($trabajo_disertacion['dis_estado']==1 ? 'checked="checked"' : ''); ?> /></div>
	<div id="custom-lbl" >Fecha de Fin : <input type="date" class="edit-inp" name="dis_fechafin" value="<?php echo ($this->input->post('dis_fechafin') ? $this->input->post('dis_fechafin') : $trabajo_disertacion['dis_fechafin']); ?>" /></div>
	<div id="custom-lbl" >Defensa : <input type="text" class="edit-inp" name="dis_defensa" value="<?php echo ($this->input->post('dis_defensa') ? $this->input->post('dis_defensa') : $trabajo_disertacion['dis_defensa']); ?>" /></div>

    <div id="custom-lbl"><button type="submit" id="edit-submit"></button></div>

    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <?php echo form_close(); ?>

</div>