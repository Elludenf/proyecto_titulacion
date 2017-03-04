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
    <div id="edit-titulo">Modificar Carrera</div>
<?php echo validation_errors(); ?>

<?php echo form_open('carrera/edit/'.$carrera['carr_codigo']); ?>

	<div id="custom-lbl">
				Esc Codigo : 
				<select name="esc_codigo"  class="edit-inp">
					<option value="">Seleccionar Escuela</option>
					<?php 
					foreach($all_escuelas as $escuela)
					{
						$selected = ($escuela['esc_codigo'] == $carrera['esc_codigo']) ? ' selected="selected"' : null;

						echo '<option value="'.$escuela['esc_codigo'].'" '.$selected.'>'.$escuela['esc_descripcion'].'</option>';
					} 
					?>
				</select>
		</div>
	<div id="custom-lbl">Carr Descripcion : <input type="text" class="edit-inp" name="carr_descripcion" value="<?php echo ($this->input->post('carr_descripcion') ? $this->input->post('carr_descripcion') : $carrera['carr_descripcion']); ?>" /></div>

        <div id="custom-lbl"><button type="submit" id="edit-submit"></button></div>

        <div class="clear-esp"></div>
        <div class="clear-esp"></div>
        <div class="clear-esp"></div>
        <div class="clear-esp"></div>
        <?php echo form_close(); ?>

    </div>
