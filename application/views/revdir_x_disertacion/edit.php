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
    <div id="edit-titulo">Modificar Director por Disertacion</div>
<?php echo validation_errors(); ?>

<?php echo form_open('revdir_x_disertacion/edit/'.$revdir_x_disertacion['dis_codigo'].'/'.$revdir_x_disertacion['prof_codigo']); ?>

    <div id="custom-lbl" >Trabajo Disertacion: <?php echo $trabajo['dis_titulo']?></div>
	<div id="custom-lbl" >Profesor :
		<select name="prof_codigo" class="edit-inp" >
			<option value="">Seleccionar Profesor</option>
			<?php
			foreach($all_profesores as $profesor)
			{
				$selected = ($profesor['prof_codigo'] == $revdir_x_disertacion['prof_codigo']) ? ' selected="selected"' : null;

				echo '<option value="'.$profesor['prof_codigo'].'" '.$selected.'>'.$profesor['prof_apellido1'].$profesor['prof_nombre1'].'</option>';
			}
			?>
		</select>
	</div>
	<div id="custom-lbl" >Rxd Tipo :
		<select name="rxd_tipo" class="edit-inp" >
			<option value="">Seleccione Tipo Responsable</option>
			<?php

			echo '<option value="DIR">Director</option>';
			echo '<option value="R_1">Revisor I</option>';
			echo '<option value="R_2">Revisor II</option>';

			?>
		</select>
	</div>
	<div id="custom-lbl" >Rxd Fechanombramiento : <input type="text" class="edit-inp"  name="rxd_fechanombramiento" value="<?php echo ($this->input->post('rxd_fechanombramiento') ? $this->input->post('rxd_fechanombramiento') : $revdir_x_disertacion['rxd_fechanombramiento']); ?>" /></div>

    <div id="custom-lbl"><button type="submit" id="edit-submit"></button></div>

    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <?php echo form_close(); ?>

</div>