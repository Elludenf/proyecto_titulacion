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
    <div id="edit-titulo">Nuevo Profesor</div>
<?php echo validation_errors(); ?>

<?php echo form_open('profesor/add'); ?>


	<div  id="custom-lbl" >Prof Nombre1 : <input type="text"  class="edit-inp" name="prof_nombre1" value="<?php echo $this->input->post('prof_nombre1'); ?>" /></div>
	<div  id="custom-lbl" >Prof Nombre2 : <input type="text" class="edit-inp"  name="prof_nombre2" value="<?php echo $this->input->post('prof_nombre2'); ?>" /></div>
	<div  id="custom-lbl" >Prof Apellido1 : <input type="text" class="edit-inp" name="prof_apellido1" value="<?php echo $this->input->post('prof_apellido1'); ?>" /></div>
	<div  id="custom-lbl" >Prof Apellido2 : <input type="text" class="edit-inp" name="prof_apellido2" value="<?php echo $this->input->post('prof_apellido2'); ?>" /></div>
	<div  id="custom-lbl" >Prof Tipoid : <input type="text" class="edit-inp" name="prof_tipoid" value="<?php echo $this->input->post('prof_tipoid'); ?>" /></div>
	<div  id="custom-lbl" >Prof Id : <input type="text" class="edit-inp" name="prof_id" value="<?php echo $this->input->post('prof_id'); ?>" /></div>
	<div  id="custom-lbl" >Prof Direccion : <input type="text" class="edit-inp" name="prof_direccion" value="<?php echo $this->input->post('prof_direccion'); ?>" /></div>
	<div  id="custom-lbl" >Prof Telefono : <input type="text" class="edit-inp" name="prof_telefono" value="<?php echo $this->input->post('prof_telefono'); ?>" /></div>
	<div  id="custom-lbl" >Prof Celular : <input type="text" class="edit-inp"  name="prof_celular" value="<?php echo $this->input->post('prof_celular'); ?>" /></div>
	<div  id="custom-lbl" >Prof Mail : <input type="text" class="edit-inp" name="prof_mail" value="<?php echo $this->input->post('prof_mail'); ?>" /></div>
	<div  id="custom-lbl" >Prof Mailpuce : <input type="text" class="edit-inp" name="prof_mailpuce" value="<?php echo $this->input->post('prof_mailpuce'); ?>" /></div>
	<div  id="custom-lbl" >Prof Fechanac : <input type="text" class="edit-inp" name="prof_fechanac" value="<?php echo $this->input->post('prof_fechanac'); ?>" /></div>
	<div  id="custom-lbl" >Prof Sexo : <input type="text" class="edit-inp" name="prof_sexo" value="<?php echo $this->input->post('prof_sexo'); ?>" /></div>
	<div  id="custom-lbl" >Prof Foto : <input type="text" class="edit-inp" name="prof_foto" value="<?php echo $this->input->post('prof_foto'); ?>" /></div>
	<div  id="custom-lbl" >Prof Oficina : <input type="text" class="edit-inp" name="prof_oficina" value="<?php echo $this->input->post('prof_oficina'); ?>" /></div>

    <div id="custom-lbl" ><button type="submit" id="add-submit"></button></div>

    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <?php echo form_close(); ?>


</div>
