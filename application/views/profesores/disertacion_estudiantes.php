<div id ="nav-bar">

    <div class = "logo2"><img src = "<?php echo base_url();?>assets/images/pantalla_main/logo_puce2.png"></div>
    <div class = "icono-despliegue"><img src = "<?php echo base_url();?>assets/images/pantalla_main/icono_despliegue_lista.png"></div>
    <div class = "tipo-usuario"><?php echo $this->session-> __get('tipo_usuario');?></div>
    <div class = "nombre-usuario"><a href="<?php echo base_url();?>profesor/perfil"><?php echo $profesor['prof_apellido1'].' '.$profesor['prof_apellido2'].' '.$profesor['prof_nombre1'].' '.$profesor['prof_nombre2']; ?></a></div>
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
            <h1>Estudiantes de disertacion</h1>

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

                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Codigo</a>	</th>

                                    <th class="table-header-repeat line-left minwidth-1"><a href="">1er Nombre</a></th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">2do Nombre</a></th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">1er Apellido</a></th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">2do Apellido</a></th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Tema</a></th>
                                    <th class="table-header-repeat line-left minwidth-1"><a href="">Acciones</a></th>

                                </tr>
                                <?php foreach($estudiantes as $e){ ?>
                                    <tr>
                                        <td><?php echo $e['est_id']; ?></td>
                                        <td><?php echo $e['est_nombre1']; ?></td>
                                        <td><?php echo $e['est_nombre2']; ?></td>
                                        <td><?php echo $e['est_apellido1']; ?></td>
                                        <td><?php echo $e['est_apellido2']; ?></td>
                                        <td><?php echo $e['dis_titulo']; ?></td>

                                        <td>

                                            <a href="<?php echo site_url('elabora/edit/'.$e['est_codigo'].'/'.$e['dis_codigo']); ?>">Calificar</a>
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