
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
    <div id="edit-titulo">Modificar Examen Complexivo</div>
    <?php if(validation_errors() == true) {?>

        <div id="val_errors"  title="Error"> <?php echo validation_errors(); ?></div>

    <?php  }?>

<?php echo form_open('examen_complexivo/edit/'.$examen_complexivo['exa_codigo']); ?>

	<div  id="custom-lbl">
				Estudiante:
				<select name="est_codigo"  class="edit-inp">
					<option value="">Seleccionar Estudiante</option>
					<?php 
					foreach($all_estudiantes as $estudiante)
					{
						$selected = ($estudiante['est_codigo'] == $examen_complexivo['est_codigo']) ? ' selected="selected"' : null;

						echo '<option value="'.$estudiante['est_codigo'].'" '.$selected.'>'.$estudiante['est_apellido1'].' '.$estudiante['est_apellido2'].' '.$estudiante['est_nombre1'].' '.$estudiante['est_nombre2'].'</option>';
					} 
					?>
				</select>
		</div>
	<div  id="custom-lbl">Fecha de Inicio : <input type="date"  class="edit-inp" name="exa_fechainicio" value="<?php echo ($this->input->post('exa_fechainicio') ? $this->input->post('exa_fechainicio') : $examen_complexivo['exa_fechainicio']); ?>" /></div>
	<div  id="custom-lbl">Estado :
        <select name="exa_estado" class="edit-inp">

            <option <?php if ($examen_complexivo['exa_estado'] == 'EP' ) echo 'selected' ; ?> value="EP">En Proceso</option>
            <option <?php if ($examen_complexivo['exa_estado'] == 'AP' ) echo 'selected' ; ?> value="AP">Aprobado</option>
            <option <?php if ($examen_complexivo['exa_estado'] == 'RP' ) echo 'selected' ; ?> value="RP">Reprobado</option>
        </select>
    </div>
	<div  id="custom-lbl">Horas de Docencia : <input type="text"  class="edit-inp" name="exa_horas_docencia" value="<?php echo ($this->input->post('exa_horas_docencia') ? $this->input->post('exa_horas_docencia') : $examen_complexivo['exa_horas_docencia']); ?>" /></div>
	<div  id="custom-lbl">Horas Autonomas : <input type="text"  class="edit-inp" name="exa_horas_autonomas" value="<?php echo ($this->input->post('exa_horas_autonomas') ? $this->input->post('exa_horas_autonomas') : $examen_complexivo['exa_horas_autonomas']); ?>" /></div>

    <div id="custom-lbl"><button type="submit" id="edit-submit"></button></div>

    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <?php echo form_close(); ?>

</div>
