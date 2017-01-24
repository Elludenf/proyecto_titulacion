<?php echo validation_errors(); ?>

<?php echo form_open('permiso/add'); ?>

	<div>perm Estado : <input type="checkbox" name="perm_estado" value="1" value="<?php echo $this->input->post('perm_estado'); ?>" /></div>
	<div>perm Creat : <input type="checkbox" name="perm_creat" value="1" value="<?php echo $this->input->post('perm_creat'); ?>" /></div>
	<div>perm Read : <input type="checkbox" name="perm_read" value="1" value="<?php echo $this->input->post('perm_read'); ?>" /></div>
	<div>perm Update : <input type="checkbox" name="perm_update" value="1" value="<?php echo $this->input->post('perm_update'); ?>" /></div>
	<div>perm Delete : <input type="checkbox" name="perm_delete" value="1" value="<?php echo $this->input->post('perm_delete'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>