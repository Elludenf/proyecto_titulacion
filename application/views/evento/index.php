<!--
<table border="1" width="100%">
    <tr>
		<th>Eve Codigo</th>
		<th>Eve Fecha</th>
		<th>Eve Tema</th>
		<th>Eve Descripcion</th>
		<th>Actions</th>
    </tr>
	<?php foreach($evento as $e){ ?>
    <tr>
		<td><?php echo $e['eve_codigo']; ?></td>
		<td><?php echo $e['eve_fecha']; ?></td>
		<td><?php echo $e['eve_tema']; ?></td>
		<td><?php echo $e['eve_descripcion']; ?></td>
		<td>
            <a href="<?php echo site_url('evento/edit/'.$e['eve_codigo']); ?>">Edit</a> | 
            <a href="<?php echo site_url('evento/remove/'.$e['eve_codigo']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
-->


<table border="0	" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="<?php echo base_url();?>/assets/images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="<?php echo base_url();?>/assets/images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
			<!--  start content-table-inner ...................................................................... START -->
			<div id="content-table-inner">

				<!--  start table-content  -->
				<div id="table-content">

					<!--  start product-table ..................................................................................... -->
					<form id="mainform" action="">
						<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
							<tr>

								<th class="table-header-repeat line-left minwidth-1"><a href="">Codigo Evento</a>	</th>
								<th class="table-header-repeat line-left minwidth-1"><a href="">Fecha del evento</a></th>
								<th class="table-header-repeat line-left minwidth-1"><a href="">Tema del Evento</a></th>
								<th class="table-header-repeat line-left minwidth-1"><a href="">Descripción</a></th>



								<!--
                                <th class="table-header-repeat line-left minwidth-1"><a href="">ID</a></th>
                                -->


							</tr>
							<?php foreach($evento as $e){ ?>
								<tr>

									<td><?php echo $e['eve_codigo']; ?></td>
									<td><?php echo $e['eve_fecha']; ?></td>
									<td><?php echo $e['eve_tema']; ?></td>
									<td><?php echo $e['eve_descripcion']; ?></td>


									<td>
										<a href="<?php echo site_url('estudiante/edit/'.$e['est_codigo']); ?>">Editar</a> |
										<a href="<?php echo site_url('estudiante/remove/'.$e['est_codigo']); ?>">Eliminar</a>
									</td>

								</tr>
							<?php } ?>
						</table>


						<!--  end product-table................................... -->
					</form>
				</div>
				<!--  end content-table  -->
			</div>
			<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
</table>