

<!--/**
 * Created by PhpStorm.
 * User: chalo
 * Date: 1/24/2017
 * Time: 4:44 PM
 */-->



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


<!--stars reposts--------------------------------------------------------------------------------------------------------------------->
<div id="content-outer">
    <!-- start content -->
    <div id="content">
        <!--  start top-search -->
        <div id="top-search">
            <h1>GRADUADOS</h1>
            <table id= "tabla-busqueda" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>
                        <select  class="styledselect" onchange="location= this.value;">
                            <option value='<?php echo site_url('Estudiante/graduados')?>'>Graduados</option>
                            <option value='<?php echo site_url('Estudiante/reportes')?>'>Todos</a></option>
                            <option value='<?php echo site_url('Estudiante/titulacion')?>'>Titulacion</option>
                            <option value='<?php echo site_url('Estudiante/disertacion')?>'">Disertacion</option>
                            <option value="carreras">Carreras</option>
                            <option value="escuelas">Escuelas</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" class="form-control" placeholder="Busqueda"/>

                    </td>
                    <td>
                        <input type="image" src="<?php echo base_url();?>/assets/images/pantalla_main/icono_busqueda.png"  />
                    </td>
                </tr>
            </table>
        </div>
    </div>





    <!----end reports----------------------------------------------------------------->

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

                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Codigo</a>	</th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Codigo Carrera</a>	</th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">1er Nombre</a></th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">2do Nombre</a></th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">1er Apellido</a></th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">2do Apellido</a></th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Tipo ID</a></th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">ID</a></th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Direccion</a></th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Telefono</a></th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Celular</a></th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Email Personal</a></th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Email PUCE</a></th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Fecha Nacimiento</a></th>
                                    <!--
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">ID</a></th>
                                    -->
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Sexo</a></th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Foto</a></th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Fecha Ingreso Universidad</a></th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Fecha Estimada Graduación</a></th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Fecha Graduación</a></th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Edicion</a></th>


                                </tr>
                                <?php foreach($estudiante as $e){ ?>
                                    <tr>

                                        <td><?php echo $e['est_codigo']; ?></td>
                                        <td><?php echo $e['carr_codigo']; ?></td>
                                        <td><?php echo $e['est_nombre1']; ?></td>
                                        <td><?php echo $e['est_nombre2']; ?></td>
                                        <td><?php echo $e['est_apellido1']; ?></td>
                                        <td><?php echo $e['est_apellido2']; ?></td>
                                        <td><?php echo $e['est_tipoid']; ?></td>
                                        <td><?php echo $e['est_id']; ?></td>
                                        <td><?php echo $e['est_direccion']; ?></td>
                                        <td><?php echo $e['est_telefono']; ?></td>
                                        <td><?php echo $e['est_celular']; ?></td>
                                        <td><?php echo $e['est_mail']; ?></td>
                                        <td><?php echo $e['est_mailpuce']; ?></td>
                                        <td><?php echo $e['est_fechanac']; ?></td>
                                        <td><?php echo $e['est_sexo']; ?></td>
                                        <td><?php echo $e['est_foto']; ?></td>
                                        <td><?php echo $e['est_fechaingreso']; ?></td>
                                        <td><?php echo $e['est_fechaestimadagraduacion']; ?></td>
                                        <td><?php echo $e['est_fechagraduacion']; ?></td>
                                        <td>
                                            <a href="<?php echo site_url('estudiante/edit/'.$e['est_codigo']); ?>">Edit</a> |
                                            <a href="<?php echo site_url('estudiante/remove/'.$e['est_codigo']); ?>">Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>

                            <?php foreach ($links as $link) {
                                echo "<li>". $link."</li>";
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

<div id="select-imprimir">

    <div class="btn-imprimir">

        <a href='<?php echo site_url('Estudiante/imprimir_graduados')?>'  class="btn-imprimir-default">IMPRIMIR</a>

    </div>
</div>


<div class="clear"></div>