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
    <div id="edit-titulo">Nueva Disertacion Elaborada por Estudiante</div>
    <?php echo validation_errors(); ?>

<?php echo form_open('elabora/add'); ?>

	<div id="custom-lbl" >Estudiante :
		<select name="est_codigo" class="edit-inp">
			<option value="">Seleccione el estudiante</option>
			<?php
			foreach($all_estudiantes as $estudiante)
			{
				$selected = ($estudiante['est_codigo'] == $this->input->post('est_codigo')) ? ' selected="selected"' : null;

				echo '<option value="'.$estudiante['est_codigo'].'" '.$selected.'>'.$estudiante['est_apellido1'].$estudiante['est_nombre1'].'</option>';
			}
			?>
		</select>
	</div>
	<div id="custom-lbl" >Trabajo Disertacion :
		<select name="dis_codigo" class="edit-inp">
			<option value="">Selecciona la disertacion</option>
			<?php
			foreach($all_trabajos as $trabajo_disertacion)
			{
				$selected = ($trabajo_disertacion['dis_codigo'] == $this->input->post('dis_codigo')) ? ' selected="selected"' : null;

				echo '<option value="'.$trabajo_disertacion['dis_codigo'].'" '.$selected.'>'.$trabajo_disertacion['dis_titulo'].'</option>';
			}
			?>
		</select>
	</div>
	<div id="custom-lbl">Elb Nota Horal : <input type="text" class="edit-inp" name="elb_nota_horal" value="<?php echo $this->input->post('elb_nota_horal'); ?>" /></div>
	<div id="custom-lbl">Elb Nota Escrito : <input type="text" class="edit-inp" name="elb_nota_escrito" value="<?php echo $this->input->post('elb_nota_escrito'); ?>" /></div>

    <div id="custom-lbl" ><button type="submit" id="add-submit"></button></div>

    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <?php echo form_close(); ?>


</div>
