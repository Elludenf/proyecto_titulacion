<?php echo validation_errors(); ?>

<?php echo form_open('trabajo_disertacion/edit/'.$trabajo_disertacion['dis_codigo']); ?>

	<div>Dis Fechainicio : <input type="text" name="dis_fechainicio" value="<?php echo ($this->input->post('dis_fechainicio') ? $this->input->post('dis_fechainicio') : $trabajo_disertacion['dis_fechainicio']); ?>" /></div>
	<div>Dis Fechapresentacionplan : <input type="text" name="dis_fechapresentacionplan" value="<?php echo ($this->input->post('dis_fechapresentacionplan') ? $this->input->post('dis_fechapresentacionplan') : $trabajo_disertacion['dis_fechapresentacionplan']); ?>" /></div>
	<div>Dis Fechaaprobacion : <input type="text" name="dis_fechaaprobacion" value="<?php echo ($this->input->post('dis_fechaaprobacion') ? $this->input->post('dis_fechaaprobacion') : $trabajo_disertacion['dis_fechaaprobacion']); ?>" /></div>
	<div>Dis Titulo : <input type="text" name="dis_titulo" value="<?php echo ($this->input->post('dis_titulo') ? $this->input->post('dis_titulo') : $trabajo_disertacion['dis_titulo']); ?>" /></div>
	<div>Dis Estado : <input type="checkbox" name="dis_estado" value="1" <?php echo ($trabajo_disertacion['dis_estado']==1 ? 'checked="checked"' : ''); ?> /></div>
	<div>Dis Fechafin : <input type="text" name="dis_fechafin" value="<?php echo ($this->input->post('dis_fechafin') ? $this->input->post('dis_fechafin') : $trabajo_disertacion['dis_fechafin']); ?>" /></div>
	<div>Dis Defensa : <input type="text" name="dis_defensa" value="<?php echo ($this->input->post('dis_defensa') ? $this->input->post('dis_defensa') : $trabajo_disertacion['dis_defensa']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>