<link rel="stylesheet" href="../../../../proyecto_titulacion/assets/css/progressBar.css" type="text/css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Work',     11],
            ['Eat',      2],
            ['Commute',  2],
            ['Watch TV', 2],
            ['Sleep',    7]
        ]);

        var options = {
            title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
</script>
<div id ="nav-bar">

    <div class = "logo2"><img src = "<?php echo base_url();?>assets/images/pantalla_main/logo_puce2.png"></div>
    <div class = "icono-despliegue"><img src = "<?php echo base_url();?>assets/images/pantalla_main/icono_despliegue_lista.png"></div>
    <div class = "tipo-usuario"><?php echo $this->session-> __get('tipo_usuario');?></div>
    <div class = "nombre-usuario"><?php echo $estudiante['est_apellido1'].' '.$estudiante['est_apellido2'].' '.$estudiante['est_nombre1'].' '.$estudiante['est_nombre2']; ?></div>
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

<div id="pagina_contenido_perfil">

    <div class="row">

        <div class="servicios">
            <h3>CONSULTAS</h3>

            <div id="select-report">

                <div class="btn-reports">

                    <a href='<?php echo site_url('Estudiante/reportes')?>' class="btn-reports-default">DISERTACION</a>

                </div>
            </div>
            <div id="select-report">

                <div class="btn-reports">

                    <a href='<?php echo site_url('Estudiante/reportes')?>' class="btn-reports-default">EXAMEN COMPLEXIVO</a>

                </div>
            </div>

        </div>

        <div class="datos">
            <h3>DATOS PERSONALES</h3>

            <div class="pricing hover-effect">


                <div class="pricing-head">

                    <h3 class="bg-purple-wisteria">
                        <?php echo $estudiante['est_apellido1'].' '.$estudiante['est_apellido2'].' '.$estudiante['est_nombre1'].' '.$estudiante['est_nombre2']; ?> <span>Estudiante</span>
                    </h3>

                </div>
                <ul class="pricing-content list-unstyled">

                    <li>
                        <i class="fa fa-user"></i>
                        <span class="usuario-item"><?php echo $estudiante['est_tipoid']; ?>:</span>
                        <?php echo $estudiante['est_id']; ?>             </li>

                    <li>
                        <i class="fa fa-envelope"></i>
                        <span class="usuario-item">Correo:</span>
                        <?php echo $estudiante['est_mailpuce']; ?>                 </li>

                    <li>
                        <i class="fa fa-calendar-minus-o"></i>
                        <span class="usuario-item">Facultad:</span>
                        <?php echo $carrera['facu_descripcion']; ?>                      </li>

                    <li>
                        <i class="fa fa-calendar-minus-o"></i>
                        <span class="usuario-item">Carrera:</span>
                        <?php echo $carrera['carr_descripcion'];?>                      </li>



                </ul>



            </div>


            <div class="container">
                <ul class="progressbar">
                    <li <?php echo $disertacionEstadoPresentacion['disestado']; ?>>Presentación plan de Tesis</li>
                    <li <?php echo $disertacionEstadoAprobacion['disestado']; ?>>Aprobación plan de Tesis</li>
                    <li <?php echo $disertacionEstadoFinalizacion['disestado']; ?>>Finalización Disertación</li>
                    <li <?php echo $disertacionEstadoDefensa['disestado']; ?>>Defensa</li>
                </ul>


            <b></b>
            <b></b>

                <h3>INFORMACIÓN DEL TRABAJO DEL ESTUDIANTE</h3>

                <div class="pricing hover-effect">


                    <div class="pricing-head">

                        <h3 class="bg-purple-wisteria"><span>Disertación</span>
                        </h3>

                    </div>

            <ul class="pricing-content list-unstyled">

                <li>
                    <i class="fa fa-user"></i>
                    <span class="usuario-item">Codigo de la Disertación:</span>
                    <?php echo $disertacionInfo['dis_codigo']; ?>             </li>

                <li>
                    <i class="fa fa-envelope"></i>
                    <span class="usuario-item">Fecha Inicio de la Disertación:</span>
                    <?php echo $disertacionInfo['dis_fechainicio']; ?>                 </li>

                <li>
                    <i class="fa fa-calendar-minus-o"></i>
                    <span class="usuario-item">Fecha presentación del plan:</span>
                    <?php echo $disertacionInfo['dis_fechapresentacionplan']; ?>                      </li>

                <li>
                    <i class="fa fa-calendar-minus-o"></i>
                    <span class="usuario-item">Fecha aprobación del plan:</span>
                    <?php echo $disertacionInfo['dis_fechaaprobacion']; ?>                      </li>

                <li>
                    <i class="fa fa-calendar-minus-o"></i>
                    <span class="usuario-item">Título de la disertación:</span>
                    <?php echo $disertacionInfo['dis_titulo']; ?>                      </li>
                <li>
                    <i class="fa fa-calendar-minus-o"></i>
                    <span class="usuario-item">Finalizado?:</span>
                    <?php echo $disertacionInfo['dis_estado']; ?>                      </li>
                <li>
                    <i class="fa fa-calendar-minus-o"></i>
                    <span class="usuario-item">Fecha finalización de la disertación:</span>
                    <?php echo $disertacionInfo['dis_fechafin']; ?>                      </li>
                <li>
                    <i class="fa fa-calendar-minus-o"></i>
                    <span class="usuario-item">Fecha defensa:</span>
                    <?php echo $disertacionInfo['dis_defensa']; ?>                      </li>
                <li>
                    <i class="fa fa-calendar-minus-o"></i>
                    <span class="usuario-item">Director:</span>
                    <?php echo $directorDisertacion['prof_nombre1'].' '.$directorDisertacion['prof_nombre2'].' '.$directorDisertacion['prof_apellido1'].' '.$directorDisertacion['prof_apellido2']; ?>
                    <ul>
                        <li>
                            <span class="usuario-item">Mail Personal:</span>
                            <?php echo $directorDisertacion['prof_mail'] ?>
                            <span class="usuario-item"> Mail PUCE:</span>
                            <?php echo $directorDisertacion['prof_mailpuce'] ?>
                            <span class="usuario-item"> Oficina:</span>
                            <?php echo $directorDisertacion['prof_oficina'] ?>
                        </li>
                        <li>
                            <span class="usuario-item">Telefono:</span>
                            <?php echo $directorDisertacion['prof_telefono'] ?>
                            <span class="usuario-item"> Celular:</span>
                            <?php echo $directorDisertacion['prof_celular'] ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <i class="fa fa-calendar-minus-o"></i>
                    <span class="usuario-item">Revisor 1:</span>
                    <?php echo $revisor1Disertacion['prof_nombre1'].' '.$revisor1Disertacion['prof_nombre2'].' '.$revisor1Disertacion['prof_apellido1'].' '.$revisor1Disertacion['prof_apellido2']; ?>
                    <ul>
                        <li>
                            <span class="usuario-item">Mail Personal:</span>
                            <?php echo $revisor1Disertacion['prof_mail'] ?>
                            <span class="usuario-item"> Mail PUCE:</span>
                            <?php echo $revisor1Disertacion['prof_mailpuce'] ?>
                            <span class="usuario-item"> Oficina:</span>
                            <?php echo $revisor1Disertacion['prof_oficina'] ?>
                        </li>
                        <li>
                            <span class="usuario-item">Telefono:</span>
                            <?php echo $revisor1Disertacion['prof_telefono'] ?>
                            <span class="usuario-item"> Celular:</span>
                            <?php echo $revisor1Disertacion['prof_celular'] ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <i class="fa fa-calendar-minus-o"></i>
                    <span class="usuario-item">Revisor 2:</span>
                    <?php echo $revisor2Disertacion['prof_nombre1'].' '.$revisor2Disertacion['prof_nombre2'].' '.$revisor2Disertacion['prof_apellido1'].' '.$revisor2Disertacion['prof_apellido2']; ?>
                    <ul>
                        <li>
                            <span class="usuario-item">Mail Personal:</span>
                            <?php echo $revisor2Disertacion['prof_mail'] ?>
                            <span class="usuario-item"> Mail PUCE:</span>
                            <?php echo $revisor2Disertacion['prof_mailpuce'] ?>
                            <span class="usuario-item"> Oficina:</span>
                            <?php echo $revisor2Disertacion['prof_oficina'] ?>
                        </li>
                        <li>
                            <span class="usuario-item">Telefono:</span>
                            <?php echo $revisor2Disertacion['prof_telefono'] ?>
                            <span class="usuario-item"> Celular:</span>
                            <?php echo $revisor2Disertacion['prof_celular'] ?>
                        </li>
                    </ul>
                </li>

            </ul>
                </div>



    </div>

</div>

<!--  end content -->
<div class="clear-desplegable">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->




<div class="clear"></div>