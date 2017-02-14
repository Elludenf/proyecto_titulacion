<?php echo validation_errors(); ?>

<?php echo form_open('elabora/add'); ?>

	<div>Elb Nota Horal : <input type="text" name="elb_nota_horal" value="<?php echo $this->input->post('elb_nota_horal'); ?>" /></div>
	<div>Elb Nota Escrito : <input type="text" name="elb_nota_escrito" value="<?php echo $this->input->post('elb_nota_escrito'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>