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
    <div id="edit-titulo">Modificar Materia</div>
<?php echo validation_errors(); ?>

<?php echo form_open('materia/edit/'.$materia['mat_codigo']); ?>

	<div id="custom-lbl" >Mat Nombre : <input type="text" class="edit-inp" name="mat_nombre" value="<?php echo ($this->input->post('mat_nombre') ? $this->input->post('mat_nombre') : $materia['mat_nombre']); ?>" /></div>
	<div id="custom-lbl" >Mat Nivel : <input type="text" class="edit-inp" name="mat_nivel" value="<?php echo ($this->input->post('mat_nivel') ? $this->input->post('mat_nivel') : $materia['mat_nivel']); ?>" /></div>

    <div id="custom-lbl"><button type="submit" id="edit-submit"></button></div>

    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <?php echo form_close(); ?>

</div>
