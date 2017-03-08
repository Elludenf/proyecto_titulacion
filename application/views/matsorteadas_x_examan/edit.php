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
    <div id="edit-titulo">Modificar Materias Sorteadas Por Examen</div>

    <?php echo validation_errors(); ?>

<?php echo form_open('matsorteadas_x_examan/edit/'.$matsorteadas_x_examan['mat_codigo'].'/'.$matsorteadas_x_examan['exa_codigo']); ?>

	<div id="custom-lbl" >Mxe Fecha 1 : <input type="text" class="edit-inp" name="mxe_fecha_1" value="<?php echo ($this->input->post('mxe_fecha_1') ? $this->input->post('mxe_fecha_1') : $matsorteadas_x_examan['mxe_fecha_1']); ?>" /></div>
	<div id="custom-lbl" >Mxe Fecha 2 : <input type="text" class="edit-inp" name="mxe_fecha_2" value="<?php echo ($this->input->post('mxe_fecha_2') ? $this->input->post('mxe_fecha_2') : $matsorteadas_x_examan['mxe_fecha_2']); ?>" /></div>
	<div id="custom-lbl" >Mxe Nota Horal 1 : <input type="text" class="edit-inp" name="mxe_nota_horal_1" value="<?php echo ($this->input->post('mxe_nota_horal_1') ? $this->input->post('mxe_nota_horal_1') : $matsorteadas_x_examan['mxe_nota_horal_1']); ?>" /></div>
	<div id="custom-lbl" >Mxe Nota Escrita 1 : <input type="text" class="edit-inp" name="mxe_nota_escrita_1" value="<?php echo ($this->input->post('mxe_nota_escrita_1') ? $this->input->post('mxe_nota_escrita_1') : $matsorteadas_x_examan['mxe_nota_escrita_1']); ?>" /></div>
	<div id="custom-lbl" >Mxe Nota Horal 2 : <input type="text" class="edit-inp" name="mxe_nota_horal_2" value="<?php echo ($this->input->post('mxe_nota_horal_2') ? $this->input->post('mxe_nota_horal_2') : $matsorteadas_x_examan['mxe_nota_horal_2']); ?>" /></div>
	<div id="custom-lbl" >Mxe Nota Escrita 2 : <input type="text" class="edit-inp" name="mxe_nota_escrita_2" value="<?php echo ($this->input->post('mxe_nota_escrita_2') ? $this->input->post('mxe_nota_escrita_2') : $matsorteadas_x_examan['mxe_nota_escrita_2']); ?>" /></div>

    <div id="custom-lbl"><button type="submit" id="edit-submit"></button></div>

    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <?php echo form_close(); ?>

</div>
