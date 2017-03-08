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
<div id="edit-titulo">Modificar Estudiante</div>
<?php echo validation_errors(); ?>

<?php echo form_open('estudiante/edit/'.$estudiante['est_codigo']); ?>

	<div id="custom-lbl" >Est Nombre1 : <input type="text"  class="edit-inp" name="est_nombre1" value="<?php echo ($this->input->post('est_nombre1') ? $this->input->post('est_nombre1') : $estudiante['est_nombre1']); ?>" /></div>
	<div id="custom-lbl">Est Nombre2 : <input type="text"  class="edit-inp" name="est_nombre2" value="<?php echo ($this->input->post('est_nombre2') ? $this->input->post('est_nombre2') : $estudiante['est_nombre2']); ?>" /></div>
	<div id="custom-lbl">Est Apellido1 : <input type="text" class="edit-inp" name="est_apellido1" value="<?php echo ($this->input->post('est_apellido1') ? $this->input->post('est_apellido1') : $estudiante['est_apellido1']); ?>" /></div>
	<div id="custom-lbl">Est Apellido2 : <input type="text" class="edit-inp" name="est_apellido2" value="<?php echo ($this->input->post('est_apellido2') ? $this->input->post('est_apellido2') : $estudiante['est_apellido2']); ?>" /></div>
	<div id="custom-lbl">Est Tipoid : <input type="text" class="edit-inp" name="est_tipoid" value="<?php echo ($this->input->post('est_tipoid') ? $this->input->post('est_tipoid') : $estudiante['est_tipoid']); ?>" /></div>
	<div id="custom-lbl">Est Id : <input type="text"class="edit-inp"  name="est_id" value="<?php echo ($this->input->post('est_id') ? $this->input->post('est_id') : $estudiante['est_id']); ?>" /></div>
	<div id="custom-lbl">Est Direccion : <input type="text" class="edit-inp" name="est_direccion" value="<?php echo ($this->input->post('est_direccion') ? $this->input->post('est_direccion') : $estudiante['est_direccion']); ?>" /></div>
	<div id="custom-lbl">Est Telefono : <input type="text" class="edit-inp" name="est_telefono" value="<?php echo ($this->input->post('est_telefono') ? $this->input->post('est_telefono') : $estudiante['est_telefono']); ?>" /></div>
	<div id="custom-lbl">Est Celular : <input type="text" class="edit-inp" name="est_celular" value="<?php echo ($this->input->post('est_celular') ? $this->input->post('est_celular') : $estudiante['est_celular']); ?>" /></div>
	<div id="custom-lbl">Est Mail : <input type="text"class="edit-inp"  name="est_mail" value="<?php echo ($this->input->post('est_mail') ? $this->input->post('est_mail') : $estudiante['est_mail']); ?>" /></div>
	<div id="custom-lbl">Est Mailpuce : <input type="text"class="edit-inp"  name="est_mailpuce" value="<?php echo ($this->input->post('est_mailpuce') ? $this->input->post('est_mailpuce') : $estudiante['est_mailpuce']); ?>" /></div>
	<div id="custom-lbl">Est Fechanac : <input type="text" class="edit-inp"  id="datepicker" name="est_fechanac" value="<?php echo ($this->input->post('est_fechanac') ? $this->input->post('est_fechanac') : $estudiante['est_fechanac']); ?>" /></div>
	<div id="custom-lbl">Est Sexo : <input type="text" class="edit-inp" name="est_sexo" value="<?php echo ($this->input->post('est_sexo') ? $this->input->post('est_sexo') : $estudiante['est_sexo']); ?>" /></div>
	<div id="custom-lbl">Est Foto : <input type="text" class="edit-inp" name="est_foto" value="<?php echo ($this->input->post('est_foto') ? $this->input->post('est_foto') : $estudiante['est_foto']); ?>" /></div>
	<div id="custom-lbl">
		Carr Codigo :
		<select name="carr_codigo" class="edit-inp" >
			<option value="">select carrera</option>
			<?php
			foreach($all_carreras as $carrera)
			{
				$selected = ($carrera['carr_codigo'] == $estudiante['carr_codigo']) ? ' selected="selected"' : null;

				echo '<option value="'.$carrera['carr_codigo'].'" '.$selected.'>'.$carrera['carr_descripcion'].'</option>';
			}
			?>
		</select>
	</div>

	<div id="custom-lbl">Est Fechaingreso : <input type="text"  class="edit-inp" id="datepicker" name="est_fechaingreso" value="<?php echo ($this->input->post('est_fechaingreso') ? $this->input->post('est_fechaingreso') : $estudiante['est_fechaingreso']); ?>" /></div>
	<div id="custom-lbl">Est Fechaestimadagraduacion : <input type="text"  class="edit-inp" id="datepicker" name="est_fechaestimadagraduacion" value="<?php echo ($this->input->post('est_fechaestimadagraduacion') ? $this->input->post('est_fechaestimadagraduacion') : $estudiante['est_fechaestimadagraduacion']); ?>" /></div>
	<div id="custom-lbl">Est Fechagraduacion : <input type="text" id="datepicker"  class="edit-inp" name="est_fechagraduacion" value="<?php echo ($this->input->post('est_fechagraduacion') ? $this->input->post('est_fechagraduacion') : $estudiante['est_fechagraduacion']); ?>" /></div>

<div id="custom-lbl"><button type="submit" id="edit-submit"></button></div>

    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
<?php echo form_close(); ?>

</div>
