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
            <div id="titulo-ind" >Examenes Complexivos   <a href="<?php echo site_url('examen_complexivo/add')?>"> <img src="<?php echo base_url();?>assets/images/pantalla_main/btn-add.png"></a>
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
                        <!-- <form action= <?php /*echo site_url("/estudiante/buscarEstudiante")*/ ?> value ="search" method ="post">
                    <td>
                        <input type="text" class="searchBox" id="searchBox"/>

                    </td>
                    <td>
                        <input type="submit" value="search" src="<?php /*echo base_url();*/?>/assets/images/pantalla_main/icono_busqueda.png"  />
                    </td>
                    </form> -->
                        <td>
                            <img src="<?php echo base_url();?>/assets/images/pantalla_main/icono_busqueda.png"  />
                        </td>

                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!--  end top-search -->

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
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Exa Codigo</th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Est Codigo</th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Estudiante</th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Exa Fechainicio</th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Exa Estado</th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Exa Horas Docencia</th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Exa Horas Autonomas</th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Actions</th>
                                </tr>
                                <?php foreach($examenes_complexivo as $e){ ?>
                                <tr>
                                    <td><?php echo $e['exa_codigo']; ?></td>
                                    <td><?php echo $e['est_codigo']; ?></td>
                                    <td><?php echo $e['est_apellido1'].' '.$e['est_apellido2'].' '.$e['est_nombre1'].' '.$e['est_nombre2'];  ?></td>
                                    <td><?php echo $e['exa_fechainicio']; ?></td>
                                    <td><?php if($e['exa_estado']=='AP') echo 'Aprobado'; else if ($e['exa_estado']=='EP') echo 'En Proceso'; else echo 'Reprobado';?></td>
                                    <td><?php echo $e['exa_horas_docencia']; ?></td>
                                    <td><?php echo $e['exa_horas_autonomas']; ?></td>
                                    <td>
                                        <a href="<?php echo site_url('examen_complexivo/edit/'.$e['exa_codigo']); ?>">Edit</a> |
                                        <a href="<?php echo site_url('examen_complexivo/remove/'.$e['exa_codigo']); ?>">Delete</a>
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