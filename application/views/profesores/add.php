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
    <div id="edit-titulo">Nuevo Profesor</div>
<?php echo validation_errors(); ?>

<?php echo form_open('profesor/add'); ?>


	<div  id="custom-lbl" >Primer Nombre : <input type="text"  class="edit-inp" name="prof_nombre1" value="<?php echo $this->input->post('prof_nombre1'); ?>" /></div>
	<div  id="custom-lbl" >Segundo Nombre : <input type="text" class="edit-inp"  name="prof_nombre2" value="<?php echo $this->input->post('prof_nombre2'); ?>" /></div>
	<div  id="custom-lbl" >Primer Apellido : <input type="text" class="edit-inp" name="prof_apellido1" value="<?php echo $this->input->post('prof_apellido1'); ?>" /></div>
	<div  id="custom-lbl" >Seguno Apellido : <input type="text" class="edit-inp" name="prof_apellido2" value="<?php echo $this->input->post('prof_apellido2'); ?>" /></div>
	<div  id="custom-lbl" >Tipo ID :
        <select name="prof_tipoid" class="edit-inp">
            <option value="">Seleccionar el Tipo de ID</option>
            <?php

            echo '<option value="CED">Cedula</option>';
            echo '<option value="PAS">Pasaporte</option>';
            echo '<option value="OTR">Otro</option>';

            ?>
        </select>
    </div>
	<div  id="custom-lbl" >Id : <input type="text" class="edit-inp" name="prof_id" value="<?php echo $this->input->post('prof_id'); ?>" /></div>
	<div  id="custom-lbl" >Direccion : <input type="text" class="edit-inp" name="prof_direccion" value="<?php echo $this->input->post('prof_direccion'); ?>" /></div>
	<div  id="custom-lbl" >Telefono : <input type="text" class="edit-inp" name="prof_telefono" value="<?php echo $this->input->post('prof_telefono'); ?>" /></div>
	<div  id="custom-lbl" >Celular : <input type="text" class="edit-inp"  name="prof_celular" value="<?php echo $this->input->post('prof_celular'); ?>" /></div>
	<div  id="custom-lbl" >Mail : <input type="text" class="edit-inp" name="prof_mail" value="<?php echo $this->input->post('prof_mail'); ?>" /></div>
	<div  id="custom-lbl" >Mail PUCE : <input type="text" class="edit-inp" name="prof_mailpuce" value="<?php echo $this->input->post('prof_mailpuce'); ?>" /></div>
	<div  id="custom-lbl" >Fecha de Nacimiento : <input type="date" class="edit-inp" name="prof_fechanac" value="<?php echo $this->input->post('prof_fechanac'); ?>" /></div>
	<div  id="custom-lbl" >Sexo :
        <select name="prof_sexo" class="edit-inp">
            <option value="">Seleccionar:</option>
            <?php

            echo '<option value="F">Femenino</option>';
            echo '<option value="M">Masculino</option>';

            ?>
        </select>
    </div>
	<div  id="custom-lbl" >Foto : <input type="text" class="edit-inp" name="prof_foto" value="<?php echo $this->input->post('prof_foto'); ?>" /></div>
	<div  id="custom-lbl" >Oficina : <input type="text" class="edit-inp" name="prof_oficina" value="<?php echo $this->input->post('prof_oficina'); ?>" /></div>

    <div id="custom-lbl" ><button type="submit" id="add-submit"></button></div>

    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <?php echo form_close(); ?>


</div>
