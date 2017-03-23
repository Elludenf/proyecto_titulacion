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
    <div id="edit-titulo">Nuevo Responsable de Titulacion</div>
    <?php if(validation_errors() == true) {?>

        <div id="val_errors"  title="Error"> <?php echo validation_errors(); ?></div>

    <?php  }?>

<?php echo form_open('responsables_titulacion/add'); ?>

	<div  id="custom-lbl" >
		Profesor:
		<select name="prof_codigo" class="edit-inp" >
			<option value="">Seleccionar Profesor</option>
			<?php
			foreach($all_profesores as $profesor)
			{
				$selected = ($profesor['prof_codigo'] == $this->input->post('prof_codigo')) ? ' selected="selected"' : null;

				echo '<option value="'.$profesor['prof_codigo'].'" '.$selected.'>'.$profesor['prof_apellido1'].' '.$profesor['prof_nombre1'].'</option>';
			}
			?>
		</select>
		</div>
	<div  id="custom-lbl" >
		Tipo de Responsable:
		<select name="res_tipo" class="edit-inp" >
			<option value="">Seleccionar Tipo de Responsable</option>
			<?php
				echo '<option value="R1">Responsable Titulacion I</option>';
				echo '<option value="R2">Responsable Titulacion II</option>';
			?>
		</select>
	</div>

	<div  id="custom-lbl" >Fecha de Nombramiento : <input type="date" class="edit-inp" name="res_fechanombramiento" value="<?php echo $this->input->post('res_fechanombramiento'); ?>" /></div>

    <div id="custom-lbl" ><button type="submit" id="add-submit"></button></div>

    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <?php echo form_close(); ?>


</div>
