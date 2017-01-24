<?php echo validation_errors(); ?>

<?php echo form_open('trabajo_disertacion/add'); ?>

	<div>Dis Fechainicio : <input type="text" name="dis_fechainicio" value="<?php echo $this->input->post('dis_fechainicio'); ?>" /></div>
	<div>Dis Fechapresentacionplan : <input type="text" name="dis_fechapresentacionplan" value="<?php echo $this->input->post('dis_fechapresentacionplan'); ?>" /></div>
	<div>Dis Fechaaprobacion : <input type="text" name="dis_fechaaprobacion" value="<?php echo $this->input->post('dis_fechaaprobacion'); ?>" /></div>
	<div>Dis Titulo : <input type="text" name="dis_titulo" value="<?php echo $this->input->post('dis_titulo'); ?>" /></div>
	<div>Dis Estado : <input type="checkbox" name="dis_estado" value="1" value="<?php echo $this->input->post('dis_estado'); ?>" /></div>
	<div>Dis Fechafin : <input type="text" name="dis_fechafin" value="<?php echo $this->input->post('dis_fechafin'); ?>" /></div>
	<div>Dis Defensa : <input type="text" name="dis_defensa" value="<?php echo $this->input->post('dis_defensa'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>