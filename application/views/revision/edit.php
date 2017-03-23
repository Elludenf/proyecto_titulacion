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
    <div id="edit-titulo">Modificar Revision</div>
    <?php if(validation_errors() == true) {?>

        <div id="val_errors"  title="Error"> <?php echo validation_errors(); ?></div>

    <?php  }?>

<?php echo form_open('revision/edit/'.$revision['obs_codigo']); ?>

	<div id="custom-lbl" >
				Trabajo de Disertación :
				<select name="dis_codigo" class="edit-inp" >

					<?php 
					foreach($all_trabajo_disertacion as $trabajo_disertacion)
					{
						$selected = ($trabajo_disertacion['dis_codigo'] == $revision['dis_codigo']) ? ' selected="selected"' : null;

						echo '<option value="'.$trabajo_disertacion['dis_codigo'].'" '.$selected.'>'.$trabajo_disertacion['dis_titulo'].'</option>';
					} 
					?>
				</select>
		</div>
	<div id="custom-lbl" >
				Profesor:
				<select name="prof_codigo" class="edit-inp" >
					<?php 
					foreach($all_profesores as $profesor)
					{
						$selected = ($profesor['prof_codigo'] == $revision['prof_codigo']) ? ' selected="selected"' : null;

						echo '<option value="'.$profesor['prof_codigo'].'" '.$selected.'>'.$profesor['prof_apellido1'].' '.$profesor['prof_apellido2'].' '.$profesor['prof_nombre1'].' '.$profesor['prof_nombre2'].'</option>';
					} 
					?>
				</select>
		</div>
	<div id="custom-lbl" >Fecha de la Observación : <input type="date" class="edit-inp"  name="obs_fecha" value="<?php echo ($this->input->post('obs_fecha') ? $this->input->post('obs_fecha') : $revision['obs_fecha']); ?>" /></div>
	<div id="custom-lbl" >Observación: <input type="text" class="edit-inp" name="obs_descripcion" value="<?php echo ($this->input->post('obs_descripcion') ? $this->input->post('obs_descripcion') : $revision['obs_descripcion']); ?>" /></div>

    <div id="custom-lbl"><button type="submit" id="edit-submit"></button></div>

    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <?php echo form_close(); ?>

</div>