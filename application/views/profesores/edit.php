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
    <div id="edit-titulo">Modificar Profesor</div>
    <?php if(validation_errors() == true) {?>

        <div id="val_errors"  title="Error"> <?php echo validation_errors(); ?></div>

    <?php  }?>

<?php echo form_open('profesor/edit/'.$profesor['prof_codigo']); ?>


	<div id="custom-lbl" >Primer Nombre : <input type="text" class="edit-inp" name="prof_nombre1" value="<?php echo ($this->input->post('prof_nombre1') ? $this->input->post('prof_nombre1') : $profesor['prof_nombre1']); ?>" /></div>
	<div id="custom-lbl" >Segundo Nombre : <input type="text" class="edit-inp" name="prof_nombre2" value="<?php echo ($this->input->post('prof_nombre2') ? $this->input->post('prof_nombre2') : $profesor['prof_nombre2']); ?>" /></div>
	<div id="custom-lbl" >Primer Apellido1 : <input type="text" class="edit-inp" name="prof_apellido1" value="<?php echo ($this->input->post('prof_apellido1') ? $this->input->post('prof_apellido1') : $profesor['prof_apellido1']); ?>" /></div>
	<div id="custom-lbl" >Segundo Apellido2 : <input type="text" class="edit-inp" name="prof_apellido2" value="<?php echo ($this->input->post('prof_apellido2') ? $this->input->post('prof_apellido2') : $profesor['prof_apellido2']); ?>" /></div>
	<div id="custom-lbl" >Tipo ID :
        <select name="prof_tipoid" class="edit-inp">
            <option value="">Seleccionar el Tipo de Identificacion:</option>
            <option <?php if ($profesor['prof_tipoid'] == 'CED' ) echo 'selected' ; ?> value="CED">Cedula</option>
            <option <?php if ($profesor['prof_tipoid'] == 'PAS' ) echo 'selected' ; ?> value="PAS">Pasaporte</option>
            <option <?php if ($profesor['prof_tipoid'] == 'OTR' ) echo 'selected' ; ?> value="OTR">Otro</option>
        </select>
    </div>
	<div id="custom-lbl" >Id : <input type="text"  class="edit-inp"  name="prof_id" value="<?php echo ($this->input->post('prof_id') ? $this->input->post('prof_id') : $profesor['prof_id']); ?>" /></div>
	<div id="custom-lbl" >Direccion : <input type="text" class="edit-inp" name="prof_direccion" value="<?php echo ($this->input->post('prof_direccion') ? $this->input->post('prof_direccion') : $profesor['prof_direccion']); ?>" /></div>
	<div id="custom-lbl" >Telefono : <input type="text" class="edit-inp" name="prof_telefono" value="<?php echo ($this->input->post('prof_telefono') ? $this->input->post('prof_telefono') : $profesor['prof_telefono']); ?>" /></div>
	<div id="custom-lbl" >Celular : <input type="text" class="edit-inp" name="prof_celular" value="<?php echo ($this->input->post('prof_celular') ? $this->input->post('prof_celular') : $profesor['prof_celular']); ?>" /></div>
	<div id="custom-lbl" >Mail : <input type="text" class="edit-inp" name="prof_mail" value="<?php echo ($this->input->post('prof_mail') ? $this->input->post('prof_mail') : $profesor['prof_mail']); ?>" /></div>
	<div id="custom-lbl" >Mail PUCE : <input type="text" class="edit-inp" name="prof_mailpuce" value="<?php echo ($this->input->post('prof_mailpuce') ? $this->input->post('prof_mailpuce') : $profesor['prof_mailpuce']); ?>" /></div>
	<div id="custom-lbl" >Fecha de Nacimiento: <input type="date" class="edit-inp" name="prof_fechanac" value="<?php echo ($this->input->post('prof_fechanac') ? $this->input->post('prof_fechanac') : $profesor['prof_fechanac']); ?>" /></div>
	<div id="custom-lbl" >Sexo :
        <select name="prof_sexo" class="edit-inp">

            <option <?php if ($profesor['prof_sexo'] == 'F' ) echo 'selected' ; ?> value="F">Femenino</option>
            <option <?php if ($profesor['prof_sexo'] == 'M' ) echo 'selected' ; ?> value="M">Masculino</option>
        </select>
    </div>
	<div id="custom-lbl" >Oficina : <input type="text" class="edit-inp" name="prof_oficina" value="<?php echo ($this->input->post('prof_oficina') ? $this->input->post('prof_oficina') : $profesor['prof_oficina']); ?>" /></div>

    <div id="custom-lbl"><button type="submit" id="edit-submit"></button></div>

    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <?php echo form_close(); ?>

</div>