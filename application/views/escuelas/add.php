<div id ="nav-bar">

    <div class = "logo2"><img src = "<?php echo base_url();?>assets/images/pantalla_main/logo_puce2.png"></div>
    <div class = "icono-despliegue"><img src = "<?php echo base_url();?>assets/images/pantalla_main/icono_despliegue_lista.png"></div>
    <div class = "tipo-usuario">ADMINISTRADOR</div>
    <div class = "nombre-usuario">ADMINISTRADOR</div>
    <div class = "icono-usuario"><img src = "<?php echo base_url();?>assets/images/pantalla_main/icono_usuario.png"></div>


    <div class = "usuario-opciones">
        <div class = "usuario-opciones-desplegable">
            <a href="" id="usuario-logout"> <img src="<?php echo base_url();?>assets/images/pantalla_main/icono_logout.png"> </a>
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
    <div id="edit-titulo">Nueva Escuela</div>
<?php echo validation_errors(); ?>

<?php echo form_open('escuela/add'); ?>

	<div id="custom-lbl" >
				Facu Codigo : 
				<select name="facu_codigo"  class="edit-inp">
					<option value="">Seleccionar Facultad</option>
					<?php 
					foreach($all_facultades as $facultad)
					{
						$selected = ($facultad['facu_codigo'] == $this->input->post('facu_codigo')) ? ' selected="selected"' : null;

						echo '<option value="'.$facultad['facu_codigo'].'" '.$selected.'>'.$facultad['facu_descripcion'].'</option>';
					} 
					?>
				</select>
		</div>
	<div id="custom-lbl" >Esc Descripcion : <input type="text"  class="edit-inp" name="esc_descripcion" value="<?php echo $this->input->post('esc_descripcion'); ?>" /></div>

    <div id="custom-lbl" ><button type="submit" id="add-submit"></button></div>

    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <?php echo form_close(); ?>


</div>
