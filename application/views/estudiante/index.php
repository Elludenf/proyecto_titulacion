<div id ="nav-bar">

    <div class = "logo2"><img src = "../assets/images/pantalla_main/logo_puce2.png"></div>
    <div class = "icono-despliegue"><img src = "../assets/images/pantalla_main/icono_despliegue_lista.png"></div>
    <div class = "tipo-usuario">ADMINISTRADOR</div>
    <div class = "nombre-usuario">ADMINISTRADOR</div>
    <div class = "icono-usuario"><img src = "../assets/images/pantalla_main/icono_usuario.png"></div>

    <div class = "usuario-opciones">
        <div class = "usuario-opciones-desplegable">
            <a href="" id="usuario-logout"> <img src="../assets/images/pantalla_main/icono_logout.png"> </a>
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
            <h1>Estudiantes</h1>
            <table id= "tabla-busqueda" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>
                        <select  class="styledselect">
                            <option value="estudiantes"> Estudiantes</option>
                            <option value="profesores">Profesores</option>
                            <option value="facultades">Facultades</option>
                            <option value="carreras">Carreras</option>
                            <option value="escuelas">Escuelas</option>
                        </select>
                    </td>
                    <td>
                        <input type="image" src="../assets/images/pantalla_main/icono_busqueda.png"  />
                    </td>
                </tr>
            </table>
        </div>
        <!--  end top-search -->


        <table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
            <tr>
                <th rowspan="3" class="sized"><img src="../assets/images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
                <th class="topleft"></th>
                <td id="tbl-border-top">&nbsp;</td>
                <th class="topright"></th>
                <th rowspan="3" class="sized"><img src="../assets/images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
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
                                        <th class="table-header-check"><a id="toggle-all" ></a> </th>
                                        <th class="table-header-repeat line-left minwidth-1"><a href="">Codigo</a>	</th>
                                        <th class="table-header-repeat line-left minwidth-1"><a href="">Rol</a>	</th>
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
                                        <th class="table-header-repeat line-left minwidth-1"><a href="">Carrera</a></th>
                                        <th class="table-header-repeat line-left minwidth-1"><a href="">Fecha Ingreso Universidad</a></th>
                                        <th class="table-header-repeat line-left minwidth-1"><a href="">Fecha Estimada Graduación</a></th>
                                        <th class="table-header-repeat line-left minwidth-1"><a href="">Fecha Graduación</a></th>
                                        <th class="table-header-repeat line-left minwidth-1"><a href="">Acciones</a></th>

                                    </tr>
                                    <?php foreach($estudiante as $e){ ?>
                                        <tr>
                                            <td></td>
                                            <td><?php echo $e['per_codigo']; ?></td>
                                            <td><?php echo $e['rol_codigo']; ?></td>
                                            <td><?php echo $e['per_nombre1']; ?></td>
                                            <td><?php echo $e['per_nombre2']; ?></td>
                                            <td><?php echo $e['per_apellido1']; ?></td>
                                            <td><?php echo $e['per_apellido2']; ?></td>
                                            <td><?php echo $e['per_tipoid']; ?></td>
                                            <td><?php echo $e['per_id']; ?></td>
                                            <td><?php echo $e['per_direccion']; ?></td>
                                            <td><?php echo $e['per_telefono']; ?></td>
                                            <td><?php echo $e['per_celular']; ?></td>
                                            <td><?php echo $e['per_mail']; ?></td>
                                            <td><?php echo $e['per_mailpuce']; ?></td>
                                            <td><?php echo $e['per_fechanac']; ?></td>
                                            <td><?php echo $e['per_sexo']; ?></td>
                                            <td><?php echo $e['per_foto']; ?></td>
                                            <td><?php echo $e['carr_codigo']; ?></td>
                                            <td><?php echo $e['est_fechaingreso']; ?></td>
                                            <td><?php echo $e['est_fechaestimadagraduacion']; ?></td>
                                            <td><?php echo $e['est_fechagraduacion']; ?></td>
                                            <td>
                                                <a href="<?php echo site_url('estudiante/edit/'.$e['per_codigo']); ?>">Edit</a> |
                                                <a href="<?php echo site_url('estudiante/remove/'.$e['per_codigo']); ?>">Delete</a>
                                            </td>

                                        </tr>
                                    <?php } ?>

                                </table>
                                <!--  end product-table................................... -->
                            </form>
                        </div>
                        <!--  end content-table  -->

                        <!--  start actions-box ............................................... -->
                        <div id="actions-box">
                            <a href="" class="action-slider"></a>
                            <div id="actions-box-slider">
                                <a href="<?php echo site_url(); ?>" class="action-edit">Editar</a>
                                <a href="<?php echo site_url(); ?>" class="action-delete">Eliminar</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <!-- end actions-box........... -->

                        <!--  start paging..................................................... -->
                        <table border="0" cellpadding="0" cellspacing="0" id="paging-table">
                            <tr>
                                <td>
                                    <a href="" class="page-far-left"></a>
                                    <a href="" class="page-left"></a>
                                    <div id="page-info">Pagina <strong>1</strong> / 15</div>
                                    <a href="" class="page-right"></a>
                                    <a href="" class="page-far-right"></a>
                                </td>
                                <td>
                                    <select  class="styledselect_pages">
                                        <option value="">Numero de filas</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <!--  end paging................ -->


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