<?php echo validation_errors(); ?>

<?php echo form_open('permiso/add'); ?>

	<div>Zperm Estado : <input type="checkbox" name="zperm_estado" value="1" value="<?php echo $this->input->post('zperm_estado'); ?>" /></div>
	<div>Zperm Creat : <input type="checkbox" name="zperm_creat" value="1" value="<?php echo $this->input->post('zperm_creat'); ?>" /></div>
	<div>Zperm Read : <input type="checkbox" name="zperm_read" value="1" value="<?php echo $this->input->post('zperm_read'); ?>" /></div>
	<div>Zperm Update : <input type="checkbox" name="zperm_update" value="1" value="<?php echo $this->input->post('zperm_update'); ?>" /></div>
	<div>Zperm Delete : <input type="checkbox" name="zperm_delete" value="1" value="<?php echo $this->input->post('zperm_delete'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>