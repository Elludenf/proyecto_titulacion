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
    <div id="edit-titulo">Modificar Permiso</div>
<?php echo validation_errors(); ?>

<?php echo form_open('permiso/edit/'.$permiso['perm_codigo']); ?>

	<div id="custom-lbl">perm Estado : <input type="checkbox" class="edit-inp" name="perm_estado" value="1" <?php echo ($permiso['perm_estado']==1 ? 'checked="checked"' : ''); ?> /></div>
	<div id="custom-lbl">perm Creat : <input type="checkbox" class="edit-inp" name="perm_creat" value="1" <?php echo ($permiso['perm_creat']==1 ? 'checked="checked"' : ''); ?> /></div>
	<div id="custom-lbl">perm Read : <input type="checkbox" class="edit-inp" name="perm_read" value="1" <?php echo ($permiso['perm_read']==1 ? 'checked="checked"' : ''); ?> /></div>
	<div id="custom-lbl">perm Update : <input type="checkbox" class="edit-inp" name="perm_update" value="1" <?php echo ($permiso['perm_update']==1 ? 'checked="checked"' : ''); ?> /></div>
	<div id="custom-lbl">perm Delete : <input type="checkbox" class="edit-inp" name="perm_delete" value="1" <?php echo ($permiso['perm_delete']==1 ? 'checked="checked"' : ''); ?> /></div>

    <div id="custom-lbl"><button type="submit" id="edit-submit"></button></div>

    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <?php echo form_close(); ?>

</div>
