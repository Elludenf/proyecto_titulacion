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
    <div id="edit-titulo">Modificar Disertacion Elaborada por Estudiante</div>
<?php echo validation_errors(); ?>

<?php echo form_open('elabora/edit/'.$elabora['est_codigo'].'/'.$elabora['dis_codigo']); ?>

    <div id="custom-lbl">Estudiante: <?php echo $estudiante['est_apellido1'].$estudiante['est_apellido2'].$estudiante['est_nombre1'].$estudiante['est_nombre2']?></div>
    <div id="custom-lbl">Trabajo Disertacion :

            <?php
            foreach($all_trabajos as $trabajo_disertacion)
            {
               if($trabajo_disertacion['dis_codigo'] == $elabora['dis_codigo'])

                 echo $trabajo_disertacion['dis_titulo']?><?php
            }
            ?>

    </div>
	<div id="custom-lbl">Nota Oral : <input type="text"  class="edit-inp" name="elb_nota_horal" value="<?php echo ($this->input->post('elb_nota_horal') ? $this->input->post('elb_nota_horal') : $elabora['elb_nota_horal']); ?>" /></div>
	<div id="custom-lbl">Nota Escrito : <input type="text" class="edit-inp"  name="elb_nota_escrito" value="<?php echo ($this->input->post('elb_nota_escrito') ? $this->input->post('elb_nota_escrito') : $elabora['elb_nota_escrito']); ?>" /></div>
	

    <div id="custom-lbl"><button type="submit" id="edit-submit"></button></div>

    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <?php echo form_close(); ?>

</div>
