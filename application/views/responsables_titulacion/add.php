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
    <div id="edit-titulo">Nuevo Responsable de Titulacion</div>
<?php echo validation_errors(); ?>

<?php echo form_open('responsables_titulacion/add'); ?>

	<div  id="custom-lbl" >
		Prof Codigo :
		<select name="prof_codigo" class="edit-inp" >
			<option value="">Seleccionar Profesor</option>
			<?php
			foreach($all_profesores as $profesor)
			{
				$selected = ($profesor['prof_codigo'] == $this->input->post('prof_codigo')) ? ' selected="selected"' : null;

				echo '<option value="'.$profesor['prof_codigo'].'" '.$selected.'>'.$profesor['prof_nombre1'].'</option>';
			}
			?>
		</select>
		</div>
	<div  id="custom-lbl" >
		Res Tipo :
		<select name="res_tipo" class="edit-inp" >
			<option value="">Seleccionar Tipo de Responsable</option>
			<?php
				echo '<option value="R1">Responsable Titulacion I</option>';
				echo '<option value="R2">Responsable Titulacion II</option>';
			?>
		</select>
	</div>

	<div  id="custom-lbl" >Res Fechanombramiento : <input type="text" class="edit-inp" name="res_fechanombramiento" value="<?php echo $this->input->post('res_fechanombramiento'); ?>" /></div>

    <div id="custom-lbl" ><button type="submit" id="add-submit"></button></div>

    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <?php echo form_close(); ?>


</div>
