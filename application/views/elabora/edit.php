<?php echo validation_errors(); ?>

<?php echo form_open('elabora/edit/'.$elabora['est_codigo']); ?>

	<div>Elb Nota Horal : <input type="text" name="elb_nota_horal" value="<?php echo ($this->input->post('elb_nota_horal') ? $this->input->post('elb_nota_horal') : $elabora['elb_nota_horal']); ?>" /></div>
	<div>Elb Nota Escrito : <input type="text" name="elb_nota_escrito" value="<?php echo ($this->input->post('elb_nota_escrito') ? $this->input->post('elb_nota_escrito') : $elabora['elb_nota_escrito']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>