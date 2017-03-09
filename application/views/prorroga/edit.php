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
    <div id="edit-titulo">Modificar Prorroga</div>
<?php echo validation_errors(); ?>

<?php echo form_open('prorroga/edit/'.$prorroga['pro_codigo']); ?>

	<div id="custom-lbl" >
				Dis Codigo : 
				<select name="dis_codigo" class="edit-inp" >
					<option value="">Seleccionar Trabajo de Disertacion</option>
					<?php 
					foreach($all_trabajo_disertacion as $trabajo_disertacion)
					{
						$selected = ($trabajo_disertacion['dis_codigo'] == $prorroga['dis_codigo']) ? ' selected="selected"' : null;

						echo '<option value="'.$trabajo_disertacion['dis_codigo'].'" '.$selected.'>'.$trabajo_disertacion['dis_titulo'].'</option>';
					} 
					?>
				</select>
		</div>
	<div id="custom-lbl" >Pro Fechaint : <input type="text" class="edit-inp" name="pro_fechaint" value="<?php echo ($this->input->post('pro_fechaint') ? $this->input->post('pro_fechaint') : $prorroga['pro_fechaint']); ?>" /></div>
	<div id="custom-lbl" >Pro Fechainicio : <input type="text" class="edit-inp" name="pro_fechainicio" value="<?php echo ($this->input->post('pro_fechainicio') ? $this->input->post('pro_fechainicio') : $prorroga['pro_fechainicio']); ?>" /></div>
	<div id="custom-lbl" >Pro Fechafin : <input type="text" class="edit-inp" name="pro_fechafin" value="<?php echo ($this->input->post('pro_fechafin') ? $this->input->post('pro_fechafin') : $prorroga['pro_fechafin']); ?>" /></div>
	<div id="custom-lbl" >Pro Descripcion : <input type="text" class="edit-inp" name="pro_descripcion" value="<?php echo ($this->input->post('pro_descripcion') ? $this->input->post('pro_descripcion') : $prorroga['pro_descripcion']); ?>" /></div>
	<div id="custom-lbl" >Pro Detalle : <input type="text" class="edit-inp" name="pro_detalle" value="<?php echo ($this->input->post('pro_detalle') ? $this->input->post('pro_detalle') : $prorroga['pro_detalle']); ?>" /></div>

    <div id="custom-lbl"><button type="submit" id="edit-submit"></button></div>

    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <div class="clear-esp"></div>
    <?php echo form_close(); ?>

</div>