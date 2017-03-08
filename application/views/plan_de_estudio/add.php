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
    <div id="edit-titulo">Nuevo Plan de Estudio</div>
<?php echo validation_errors(); ?>

<?php echo form_open('plan_de_estudio/add'); ?>

	<div  id="custom-lbl" >
				Carr Codigo : 
				<select name="carr_codigo"  class="edit-inp">
					<option value="">Seleccionar Carrera</option>
					<?php 
					foreach($all_carreras as $carrera)
					{
						$selected = ($carrera['carr_codigo'] == $this->input->post('carr_codigo')) ? ' selected="selected"' : null;

						echo '<option value="'.$carrera['carr_codigo'].'" '.$selected.'>'.$carrera['carr_descripcion'].'</option>';
					} 
					?>
				</select>
		</div>
	<div  id="custom-lbl" >Plan Descripcion : <input type="text"  class="edit-inp" name="plan_descripcion" value="<?php echo $this->input->post('plan_descripcion'); ?>" /></div>
	<div  id="custom-lbl" >Plan Fechainicio : <input type="text"  class="edit-inp" name="plan_fechainicio" value="<?php echo $this->input->post('plan_fechainicio'); ?>" /></div>
	<div  id="custom-lbl" >Plan Vigencia : <input type="checkbox"  class="edit-inp" name="plan_vigencia" value="1" value="<?php echo $this->input->post('plan_vigencia'); ?>" /></div>

    <div id="custom-lbl" ><button type="submit" id="add-submit"></button></div>

    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <?php echo form_close(); ?>


</div>
