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



<div class="clear-desplegable"></div>


<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
    <!-- start content -->
    <div id="content">
        <!--  start top-search -->
        <div id="top-search">
            <div id="titulo-ind" >Trabajos de Disertación   <a href="<?php echo site_url('trabajo_disertacion/add')?>"> <img src="<?php echo base_url();?>assets/images/pantalla_main/btn-add.png"></a>
                <table id= "tabla-busqueda" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                            <select  class="styledselect" onchange="location= this.value;">
                                <option  value="default">-Seleccione una tabla-</option>
                                <option  value='<?php echo site_url('estudiante/index')?>'> Estudiantes</option>
                                <option  value='<?php echo site_url('profesor/index')?>'>Profesores</option>
                                <option  value='<?php echo site_url('dicta/index')?>'>Materias Dictadas por Profesor</option>
                                <option  value='<?php echo site_url('elabora/index')?>'>Disertacion Elaborada por Estudiante</option>
                                <option  value='<?php echo site_url('escuela/index')?>'>Escuelas</option>
                                <option  value='<?php echo site_url('carrera/index')?>'> Carreras</option>
                                <option  value='<?php echo site_url('materia/index')?>'>Materias</option>
                                <option  value='<?php echo site_url('facultades/index')?>'>Facultades</option>
                                <option  value='<?php echo site_url('materia_x_plan_de_estudio/index')?>'>Materias por Plan de Estudio</option>
                                <option  value='<?php echo site_url('mat_ap_x_est/index')?>'> Materias Aprobadas por Estudiante</option>
                                <option  value='<?php echo site_url('matsorteadas_x_examan/index')?>'> Materias Sorteadas por Examen</option>
                                <option  value='<?php echo site_url('periodos_academicos/index')?>'>Periodos Academicos</option>
                                <option  value='<?php echo site_url('plan_de_estudio/index')?>'> Planes de estudio</option>
                                <option  value='<?php echo site_url('examen_complexivo/index')?>'> Examen Complexivo</option>
                                <option  value='<?php echo site_url('prorroga/index')?>'>Prorrogas</option>
                                <option  value='<?php echo site_url('responsables_titulacion/index')?>'> Responsables Titulacion</option>
                                <option  value='<?php echo site_url('revdir_x_disertacion/index')?>'>Director por Disertacion</option>
                                <option  value='<?php echo site_url('revision/index')?>'> Revisiones</option>
                                <option  value='<?php echo site_url('trabajo_disertacion/index')?>'>Trabajo de Disertacion</option>

                            </select>
                        </td>
                        <form action= <?php echo site_url("/trabajo_disertacion/buscarDisertacion") ?>  method ="post">
                        <td>
                            <input type="text"  name="search" id="searchBox"/>

                        </td>
                        <td>
                            <input type="image" value="search" src="<?php echo base_url();?>/assets/images/pantalla_main/icono_busqueda.png"  />
                        </td>
                        </form>

                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!--  end top-search -->
    <br><br><br>


    <table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
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
        <th class="table-header-repeat line-left minwidth-1"><a href="">Codigo</th>
        <th class="table-header-repeat line-left minwidth-1"><a href="">Fecha Inicio</th>
        <th class="table-header-repeat line-left minwidth-1"><a href="">Fecha de Presentacion del Plan</th>
        <th class="table-header-repeat line-left minwidth-1"><a href="">Fechaaprobacion</th>
        <th class="table-header-repeat line-left minwidth-1"><a href="">Titulo</th>
        <th class="table-header-repeat line-left minwidth-1"><a href="">Estado</th>
        <th class="table-header-repeat line-left minwidth-1"><a href="">Fecha de Fin</th>
        <th class="table-header-repeat line-left minwidth-1"><a href="">Defensa</th>
        <th class="table-header-repeat line-left minwidth-1"><a href="">Acciones</th>
    </tr>
	<?php foreach($trabajo_disertacion as $t){ ?>
    <tr>
		<td><?php echo $t['dis_codigo']; ?></td>
		<td><?php echo $t['dis_fechainicio']; ?></td>
		<td><?php echo $t['dis_fechapresentacionplan']; ?></td>
		<td><?php echo $t['dis_fechaaprobacion']; ?></td>
		<td><?php echo $t['dis_titulo']; ?></td>
		<td><?php if ($t['dis_estado']=='f') echo 'En Curso'; else echo 'Finalizado';?></td>
		<td><?php echo $t['dis_fechafin']; ?></td>
		<td><?php echo $t['dis_defensa']; ?></td>
		<td>
            <a href="<?php echo site_url('trabajo_disertacion/edit/'.$t['dis_codigo']); ?>">Editar</a> |
            <a href="<?php echo site_url('trabajo_disertacion/remove/'.$t['dis_codigo']); ?>">Eliminar</a>
        </td>
    </tr>
	<?php } ?>
</table>
                            <?php foreach ($links as $link) {
                                echo $link;
                            } ?>
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
    <div class="clear-desplegable">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear-desplegable">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->




<div class="clear"></div>