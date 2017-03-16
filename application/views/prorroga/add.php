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
    <div id="edit-titulo">Nuevo Prorroga</div>
<?php echo validation_errors(); ?>

<?php echo form_open('prorroga/add'); ?>

	<div  id="custom-lbl" >
				Trabajo de Disertacion :
				<select name="dis_codigo" class="edit-inp" >
					<option value="">Seleccionar Trabajo de Disertacion</option>
					<?php 
					foreach($all_trabajo_disertacion as $trabajo_disertacion)
					{
						$selected = ($trabajo_disertacion['dis_codigo'] == $this->input->post('dis_codigo')) ? ' selected="selected"' : null;

						echo '<option value="'.$trabajo_disertacion['dis_codigo'].'" '.$selected.'>'.$trabajo_disertacion['dis_titulo'].'</option>';
					} 
					?>
				</select>
		</div>
	<div  id="custom-lbl" >Fecha de Solicitud : <input type="date" class="edit-inp" name="pro_fechaint" value="<?php echo $this->input->post('pro_fechaint'); ?>" /></div>
	<div  id="custom-lbl" >Fecha de Inicio : <input type="date" class="edit-inp" name="pro_fechainicio" value="<?php echo $this->input->post('pro_fechainicio'); ?>" /></div>
	<div  id="custom-lbl" >Fecha de Fin : <input type="date" class="edit-inp" name="pro_fechafin" value="<?php echo $this->input->post('pro_fechafin'); ?>" /></div>
	<div  id="custom-lbl" >Descripcion : <input type="text" class="edit-inp" name="pro_descripcion" value="<?php echo $this->input->post('pro_descripcion'); ?>" /></div>
	<div  id="custom-lbl" >Detalle : <input type="text" class="edit-inp" name="pro_detalle" value="<?php echo $this->input->post('pro_detalle'); ?>" /></div>

    <div id="custom-lbl" ><button type="submit" id="add-submit"></button></div>

    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <?php echo form_close(); ?>


</div>
