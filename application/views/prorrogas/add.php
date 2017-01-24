<?php echo validation_errors(); ?>

<?php echo form_open('prorroga/add'); ?>

	<div>
				Dis Codigo : 
				<select name="dis_codigo">
					<option value="">select trabajo_disertacion</option>
					<?php 
					foreach($all_trabajos_disertacion as $trabajo_disertacion)
					{
						$selected = ($trabajo_disertacion['dis_codigo'] == $this->input->post('dis_codigo')) ? ' selected="selected"' : null;

						echo '<option value="'.$trabajo_disertacion['dis_codigo'].'" '.$selected.'>'.$trabajo_disertacion['dis_titulo'].'</option>';
					} 
					?>
				</select>
		</div>
	<div>Pro Fechaint : <input type="text" name="pro_fechaint" value="<?php echo $this->input->post('pro_fechaint'); ?>" /></div>
	<div>Pro Fechainicio : <input type="text" name="pro_fechainicio" value="<?php echo $this->input->post('pro_fechainicio'); ?>" /></div>
	<div>Pro Fechafin : <input type="text" name="pro_fechafin" value="<?php echo $this->input->post('pro_fechafin'); ?>" /></div>
	<div>Pro Descripcion : <input type="text" name="pro_descripcion" value="<?php echo $this->input->post('pro_descripcion'); ?>" /></div>
	<div>Pro Detalle : <input type="text" name="pro_detalle" value="<?php echo $this->input->post('pro_detalle'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>