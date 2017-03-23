<link rel="stylesheet" href="../../../../proyecto_titulacion/assets/css/progressBar.css" type="text/css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Horas Docencia',     <?php echo $complexivoPrimerIntentoInfo['exa_horas_docencia']; ?>  ],
            ['Horas Autónomas',      <?php echo $complexivoPrimerIntentoInfo['exa_horas_autonomas']; ?>],
        ]);

        var options = {
            title: '',
            pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
    }

</script>

<script>
    google.charts.load('current', {packages: ['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawMultSeries);

    function drawMultSeries() {
        var data = google.visualization.arrayToDataTable([
            ['Materias', 'Nota de examen oral por materia', 'Nota de examen escrito por materia'],
            [<?php echo "'" ?><?php echo $nombreMateria1ComplexivoPrimerIntento['mat_nombre']; ?> <?php echo "'" ?>, <?php if (strlen($materia1ComplexivoPrimerIntento['mxe_nota_horal_1'])==0) echo 0; else echo $materia1ComplexivoPrimerIntento['mxe_nota_horal_1'] ; ?> , <?php if (strlen($materia1ComplexivoPrimerIntento['mxe_nota_escrita_1'])==0) echo 0; else echo $materia1ComplexivoPrimerIntento['mxe_nota_escrita_1'] ; ?> ],
            [<?php echo "'" ?><?php echo $nombreMateria2ComplexivoPrimerIntento['mat_nombre']; ?> <?php echo "'" ?>, <?php if (strlen($materia2ComplexivoPrimerIntento['mxe_nota_horal_1'])==0) echo 0; else echo $materia2ComplexivoPrimerIntento['mxe_nota_horal_1'] ; ?> , <?php if (strlen($materia2ComplexivoPrimerIntento['mxe_nota_escrita_1'])==0) echo 0; else echo $materia2ComplexivoPrimerIntento['mxe_nota_escrita_1'] ; ?> ],
            [<?php echo "'" ?><?php echo $nombreMateria3ComplexivoPrimerIntento['mat_nombre']; ?> <?php echo "'" ?>, <?php if (strlen($materia3ComplexivoPrimerIntento['mxe_nota_horal_1'])==0) echo 0; else echo $materia3ComplexivoPrimerIntento['mxe_nota_horal_1'] ; ?> , <?php if (strlen($materia3ComplexivoPrimerIntento['mxe_nota_escrita_1'])==0) echo 0; else echo $materia3ComplexivoPrimerIntento['mxe_nota_escrita_1'] ; ?> ],
            [<?php echo "'" ?><?php echo $nombreMateria4ComplexivoPrimerIntento['mat_nombre']; ?> <?php echo "'" ?>, <?php if (strlen($materia4ComplexivoPrimerIntento['mxe_nota_horal_1'])==0) echo 0; else echo $materia4ComplexivoPrimerIntento['mxe_nota_horal_1'] ; ?> , <?php if (strlen($materia4ComplexivoPrimerIntento['mxe_nota_escrita_1'])==0) echo 0; else echo $materia4ComplexivoPrimerIntento['mxe_nota_escrita_1'] ; ?> ],
            [<?php echo "'" ?><?php echo $nombreMateria5ComplexivoPrimerIntento['mat_nombre']; ?> <?php echo "'" ?>, <?php if (strlen($materia5ComplexivoPrimerIntento['mxe_nota_horal_1'])==0) echo 0; else echo $materia5ComplexivoPrimerIntento['mxe_nota_horal_1'] ; ?> , <?php if (strlen($materia5ComplexivoPrimerIntento['mxe_nota_escrita_1'])==0) echo 0; else echo $materia5ComplexivoPrimerIntento['mxe_nota_escrita_1'] ; ?> ]
        ]);

        var options = {
            title: '',
            chartArea: {width: '50%'},
            hAxis: {
                title: 'Notas',
                minValue: 0
            },
            vAxis: {
                title: 'Materias'
            }
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>

<script>
    google.charts.load('current', {packages: ['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawMultSeries1);

    function drawMultSeries1() {
        var data = google.visualization.arrayToDataTable([
            ['Materias', 'Nota de examen oral por materia', 'Nota de examen escrito por materia'],
            [<?php echo "'" ?><?php echo $nombreMateria1ComplexivoSegundoIntento['mat_nombre']; ?> <?php echo "'" ?>, <?php if (strlen($materia1ComplexivoSegundoIntento['mxe_nota_horal_2'])==0) echo 0; else echo $materia1ComplexivoSegundoIntento['mxe_nota_horal_2'] ; ?> , <?php if (strlen($materia1ComplexivoSegundoIntento['mxe_nota_escrita_2'])==0) echo 0; else echo $materia1ComplexivoSegundoIntento['mxe_nota_escrita_2'] ; ?> ],
            [<?php echo "'" ?><?php echo $nombreMateria2ComplexivoSegundoIntento['mat_nombre']; ?> <?php echo "'" ?>, <?php if (strlen($materia2ComplexivoSegundoIntento['mxe_nota_horal_2'])==0) echo 0; else echo $materia2ComplexivoSegundoIntento['mxe_nota_horal_2'] ; ?> , <?php if (strlen($materia2ComplexivoSegundoIntento['mxe_nota_escrita_2'])==0) echo 0; else echo $materia2ComplexivoSegundoIntento['mxe_nota_escrita_2'] ; ?> ],
            [<?php echo "'" ?><?php echo $nombreMateria3ComplexivoSegundoIntento['mat_nombre']; ?> <?php echo "'" ?>, <?php if (strlen($materia3ComplexivoSegundoIntento['mxe_nota_horal_2'])==0) echo 0; else echo $materia3ComplexivoSegundoIntento['mxe_nota_horal_2'] ; ?> , <?php if (strlen($materia3ComplexivoSegundoIntento['mxe_nota_escrita_2'])==0) echo 0; else echo $materia3ComplexivoSegundoIntento['mxe_nota_escrita_2'] ; ?> ],
            [<?php echo "'" ?><?php echo $nombreMateria4ComplexivoSegundoIntento['mat_nombre']; ?> <?php echo "'" ?>, <?php if (strlen($materia4ComplexivoSegundoIntento['mxe_nota_horal_2'])==0) echo 0; else echo $materia4ComplexivoSegundoIntento['mxe_nota_horal_2'] ; ?> , <?php if (strlen($materia4ComplexivoSegundoIntento['mxe_nota_escrita_2'])==0) echo 0; else echo $materia4ComplexivoSegundoIntento['mxe_nota_escrita_2'] ; ?> ],
            [<?php echo "'" ?><?php echo $nombreMateria5ComplexivoSegundoIntento['mat_nombre']; ?> <?php echo "'" ?>, <?php if (strlen($materia5ComplexivoSegundoIntento['mxe_nota_horal_2'])==0) echo 0; else echo $materia5ComplexivoSegundoIntento['mxe_nota_horal_2'] ; ?> , <?php if (strlen($materia5ComplexivoSegundoIntento['mxe_nota_escrita_2'])==0) echo 0; else echo $materia5ComplexivoSegundoIntento['mxe_nota_escrita_2'] ; ?> ]
        ]);

        var options = {
            title: '',
            chartArea: {width: '50%'},
            hAxis: {
                title: 'Notas',
                minValue: 0
            },
            vAxis: {
                title: 'Materias'
            }
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div1'));
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



        <div class="datos">

            <?php if(strcmp($disertacionExists['case'],'true')==0){;?> <div id ="main-titulo">Trabajo de Disertación</div><?php } ?>
            <?php if(strcmp($complexivoExists['case'],'true')==0){;?> <div id ="main-titulo">Examen Complexivo</div><?php } ?>
            <div id="container-datos">

                <div id="container-inner-datos">
                <div id="datosp-titulo">Datos Personales            </div>
                <div class="datos-header">

                    <div class="datos-nombre-tipo">
                        <?php echo $estudiante['est_apellido1'].' '.$estudiante['est_apellido2'].' '.$estudiante['est_nombre1'].' '.$estudiante['est_nombre2']; ?>
                    </div>
                    <div class="datos-nombre-tipo2">
                        <span>Estudiante</span>
                    </div>

                </div>
                <div class="datos-body">

                    <div id = "datos-ind" >

                        <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/user_icono.png"><span class="txt-ind"><?php echo $estudiante['est_tipoid']; ?>:
                        <?php echo $estudiante['est_id']; ?>  </span>           </div>

                    <div id = "datos-ind" >

                        <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/mail_icono.png"> <span class="txt-ind">Correo:
                            <?php echo $estudiante['est_mailpuce']; ?>           </span>      </div>

                    <div id = "datos-ind" >

                        <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/calendar_icono.png"><span class="txt-ind">Facultad:
                        <?php echo $carrera['facu_descripcion']; ?></span>                      </div>

                    <div id = "datos-ind" >

                        <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/calendar_icono.png"> <span class="txt-ind">Carrera:
                        <?php echo $carrera['carr_descripcion'];?>   </span>                   </div>

                </div>

                </div>
                <?php if(strcmp($disertacionExists['case'],'true')==0){;?>
                <div id="container-inner-datos">

                    <div id="datosp-titulo" >Progreso de la Disertación</div>
                    <div class = "barra">
                        <ul class="progressbar">
                            <li <?php echo $disertacionEstadoPresentacion['disestado']; ?>>Presentación plan de Tesis</li>
                            <li <?php echo $disertacionEstadoAprobacion['disestado']; ?>>Aprobación plan de Tesis</li>
                            <li <?php echo $disertacionEstadoFinalizacion['disestado']; ?>>Finalización Disertación</li>
                            <li <?php echo $disertacionEstadoDefensa['disestado']; ?>>Defensa</li>
                        </ul>
                    </div>

                </div>
                <?php } else if(strcmp($complexivoExists['case'],'true')==0){;?>
                <div id="container-inner-datos">

                    <div id="datosp-titulo" >  Horas de Estudio Para Examen Complexivo </div>
                    <div class="grafico">
                        <div id="donutchart" style="width: 500px; height: 275px;"></div> </div></div><?php };?>

            </div>
            <div class = "clear2"></div>
            <?php if(strcmp($disertacionExists['case'],'true')==0){;?>
            <div id="container-datos">

                <div id="container-inner-datos">

                    <div id="datosp-titulo">Detalles</div>

                    <div class="datos-header">

                        <div class="datos-nombre-tipo"><span>Disertación</span>
                        </div>

                    </div>

                    <div class="datos-body">

                        <div id = "datos-ind" >

                            <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_icono.png"> <span class="txt-ind">Codigo de la Disertación:
                            <?php echo $disertacionInfo['dis_codigo']; ?>        </span>      </div>
                        <div id = "datos-ind" >

                            <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/calendar_icono.png"> <span class="txt-ind">Fecha Inicio de la Disertación:
                            <?php echo $disertacionInfo['dis_fechainicio']; ?>   </span>               </div>

                        <div id = "datos-ind" >

                            <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/calendar_icono.png"><span class="txt-ind">Fecha presentación del plan:
                            <?php echo $disertacionInfo['dis_fechapresentacionplan']; ?>          </span>             </div>

                        <div id = "datos-ind" >

                            <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/calendar_icono.png"><span class="txt-ind">Fecha aprobación del plan:
                            <?php echo $disertacionInfo['dis_fechaaprobacion']; ?>    </span>                   </div>

                        <div id = "datos-ind" >

                            <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_icono.png"> <span class="txt-ind">Título de la disertación:
                            <?php echo $disertacionInfo['dis_titulo']; ?>           </span>            </div>
                        <div id = "datos-ind" >

                            <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_icono.png">  <span class="txt-ind">Estado:
                            <?php  if($disertacionInfo['dis_estado'] == true) echo "Finalizado"; else echo "No Finalizado" ; ?>                 </span>      </div>
                        <div id = "datos-ind" >

                            <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/calendar_icono.png"><span class="txt-ind">Fecha finalización de la disertación:
                            <?php echo $disertacionInfo['dis_fechafin']; ?>              </span>         </div>
                        <div id = "datos-ind" >

                            <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/calendar_icono.png"><span class="txt-ind">Fecha de la Defensa:
                            <?php echo $disertacionInfo['dis_defensa']; ?>                 </span>      </div>

                    </div>


                </div>




                    <div id="container-inner-datos">
                        <div id="datosp-titulo">Información de Contacto</div>
                        <div class="datos-header">

                            <div class="datos-nombre-tipo"><span>Director y Revisores</span>
                            </div>

                        </div>

                        <div class="datos-body">

                        <div id = "datos-ind" >
                            <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/user_icono.png"><span class="txt-ind">Director:
                            <?php echo $directorDisertacion['prof_nombre1'].' '.$directorDisertacion['prof_nombre2'].' '.$directorDisertacion['prof_apellido1'].' '.$directorDisertacion['prof_apellido2']; ?></span>
                        </div>

                                <div  id = "datos-ind2" >
                                    <img class = "icn-inner-ind" src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"><span class="txt-ind"> Mail PUCE:
                                    <?php echo $directorDisertacion['prof_mailpuce'] ?></span>
                                </div>
                                <div  id = "datos-ind2" >
                                    <img class = "icn-inner-ind" src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind"> Oficina:
                                    <?php echo $directorDisertacion['prof_oficina'] ?></span>
                                </div>
                                <div id = "datos-ind2" >
                                    <img class = "icn-inner-ind" src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"><span class="txt-ind">Telefono:
                                    <?php echo $directorDisertacion['prof_telefono'] ?></span>
                                </div>


                        <div id = "datos-ind" >
                            <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/user_icono.png"><span class="txt-ind">Revisor 1:
                            <?php echo $revisor1Disertacion['prof_nombre1'].' '.$revisor1Disertacion['prof_nombre2'].' '.$revisor1Disertacion['prof_apellido1'].' '.$revisor1Disertacion['prof_apellido2']; ?></span>
                        </div>


                            <div id = "datos-ind2" >
                                <img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind"> Mail PUCE:
                                <?php echo $revisor1Disertacion['prof_mailpuce'] ?></span></div>

                                <div id = "datos-ind2" >
                                    <img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"><span class="txt-ind"> Oficina:
                                    <?php echo $revisor1Disertacion['prof_oficina'] ?></span></div>

                        <div id = "datos-ind2" >
                            <img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"><span class="txt-ind">Telefono:
                            <?php echo $revisor1Disertacion['prof_telefono'] ?></span></div>





                        <div id = "datos-ind" >
                            <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/user_icono.png"> <span class="txt-ind">Revisor 2:
                            <?php echo $revisor2Disertacion['prof_nombre1'].' '.$revisor2Disertacion['prof_nombre2'].' '.$revisor2Disertacion['prof_apellido1'].' '.$revisor2Disertacion['prof_apellido2']; ?></span>
                        </div>


                        <div id = "datos-ind2" >
                            <img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"><span class="txt-ind"> Mail PUCE:
                            <?php echo $revisor2Disertacion['prof_mailpuce'] ?></span></div>
                        <div id = "datos-ind2" >
                            <img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind"> Oficina:
                            <?php echo $revisor2Disertacion['prof_oficina'] ?></span></div>


                        <div id = "datos-ind2" >
                            <img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"><span class="txt-ind">Telefono:
                            <?php echo $revisor2Disertacion['prof_telefono'] ?></span></div>



                        </div>

                    </div>
            
            </div>
            <?php } ?>


            <?php if(strcmp($complexivoExists['case'],'true')==0){;?>

                <div class="datos">




                    <div id ="container-datos">
                        <div id ="container-inner-datos">
                        <div id="datosp-titulo" >  Notas Primer Intento Examen Complexivo </div>
                        <div class="grafico">
                            <div id="chart_div" style="width: 500px; height: 450px;"></div>
                        </div></div>


                        <div id ="container-inner-datos">
                            <div id="datosp-titulo" >  Detalle </div>
                    <div class="datos-header">

                        <div class="datos-nombre-tipo">
                            <span>Primer Intento</span>
                        </div>

                    </div>

                    <div class="datos-body">

                        <div id = "datos-ind" ><img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/calendar_icono.png"> <span class="txt-ind">Fecha inicio del proceso:
                            <?php echo $complexivoPrimerIntentoInfo['exa_fechainicio'] ?></span></div>

                        <div id = "datos-ind" ><img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_icono.png"> <span class="txt-ind">Estado del examen:
                                    <?php if(strcmp($complexivoPrimerIntentoInfo['exa_estado'],'EP')==0)
                                        echo 'En proceso';
                                    else if(strcmp($complexivoPrimerIntentoInfo['exa_estado'],'RP')==0)
                                        echo 'Reprobado';
                                    else if(strcmp($complexivoPrimerIntentoInfo['exa_estado'],'AP')==0)
                                        echo 'Aprobado';
                                    ?></span></div>


                        <div id = "datos-ind2" ><img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_icono.png"> <span class="txt-ind">Materia 1:
                            <?php echo $nombreMateria1ComplexivoPrimerIntento['mat_nombre'] ?></span></div>
                        <div id = "datos-ind2" ><img class = "icn-inner-ind" src="<?php echo base_url();?>assets/images/pantalla_perfil/calendar_icono.png"> <span class="txt-ind">Fecha:
                            <?php echo $materia1ComplexivoPrimerIntento['mxe_fecha_1'] ?></span> </div>

                        <div id = "datos-ind2" ><img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind">Nota Oral:
                            <?php echo $materia1ComplexivoPrimerIntento['mxe_nota_horal_1'] ?> </span></div>

                        <div id = "datos-ind2" ><img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind"> Nota escrita:
                            <?php echo $materia1ComplexivoPrimerIntento['mxe_nota_escrita_1'] ?></span></span></div>

                                    <div id = "datos-ind2" ><img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_icono.png"> <span class="txt-ind">Materia 2:
                                <?php echo $nombreMateria2ComplexivoPrimerIntento['mat_nombre'] ?></span></div>

                            <div id = "datos-ind2" ><img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/calendar_icono.png"> <span class="txt-ind">Fecha:
                                <?php echo $materia2ComplexivoPrimerIntento['mxe_fecha_1'] ?></span></div>

                            <div id = "datos-ind2" ><img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind">Nota Oral:
                                <?php echo $materia2ComplexivoPrimerIntento['mxe_nota_horal_1'] ?></span></div>

                            <div id = "datos-ind2" ><img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind">Nota escrita:
                                <?php echo $materia2ComplexivoPrimerIntento['mxe_nota_escrita_1'] ?></span></div>

                                    <div id = "datos-ind2" ><img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_icono.png"> <span class="txt-ind">Materia 3:
                                <?php echo $nombreMateria3ComplexivoPrimerIntento['mat_nombre'] ?></span></div>

                            <div id = "datos-ind2" ><img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/calendar_icono.png"> <span class="txt-ind">Fecha:
                                <?php echo $materia3ComplexivoPrimerIntento['mxe_fecha_1'] ?></span></div>

                            <div id = "datos-ind2" ><img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind">Nota Oral:
                                <?php echo $materia3ComplexivoPrimerIntento['mxe_nota_horal_1'] ?></span></div>

                            <div id = "datos-ind2" ><img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind">Nota escrita:
                                <?php echo $materia3ComplexivoPrimerIntento['mxe_nota_escrita_1'] ?></span></div>

                            <div id = "datos-ind2" ><img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_icono.png"> <span class="txt-ind">Materia 4:
                                <?php echo $nombreMateria4ComplexivoPrimerIntento['mat_nombre'] ?></span></div>


                            <div id = "datos-ind2" ><img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/calendar_icono.png"> <span class="txt-ind">Fecha:
                                <?php echo $materia4ComplexivoPrimerIntento['mxe_fecha_1'] ?></span></div>

                            <div id = "datos-ind2" ><img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind">Nota Oral:
                                <?php echo $materia4ComplexivoPrimerIntento['mxe_nota_horal_1'] ?></span></div>

                            <div id = "datos-ind2" ><img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind">Nota escrita:
                                <?php echo $materia4ComplexivoPrimerIntento['mxe_nota_escrita_1'] ?></span></div>

                            <div id = "datos-ind2" ><img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_icono.png"> <span class="txt-ind">Materia 5:
                                <?php echo $nombreMateria5ComplexivoPrimerIntento['mat_nombre'] ?></span></div>


                            <div id = "datos-ind2" ><img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/calendar_icono.png"> <span class="txt-ind">Fecha:
                                <?php echo $materia5ComplexivoPrimerIntento['mxe_fecha_1'] ?></span></div>

                            <div id = "datos-ind2" ><img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind">Nota Oral:
                                <?php echo $materia5ComplexivoPrimerIntento['mxe_nota_horal_1'] ?></span></div>

                            <div id = "datos-ind2" ><img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind">Nota escrita:
                                <?php echo $materia5ComplexivoPrimerIntento['mxe_nota_escrita_1'] ?></span></div>

                    </div>

                        </div>

                </div>

                    <div class ="clear2"></div>
                <div id = "container-datos">



                    <div id ="container-inner-datos">
                        <div id="datosp-titulo" >  Detalle </div>
                        <div class="datos-header">

                            <div class="datos-nombre-tipo">
                                <span>Segundo Intento</span>
                            </div>

                        </div>
                <div class="datos-body">



                    <div id = "datos-ind" >
                        <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/calendar_icono.png"> <span class="txt-ind">Fecha inicio del proceso:
                        <?php echo $complexivoSegundoIntentoInfo['exa_fechainicio'] ?></div></span>


                    <div id = "datos-ind" >

                        <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_icono.png"> <span class="txt-ind">Estado del examen:
                        <?php if(strcmp($complexivoSegundoIntentoInfo['exa_estado'],'EP')==0)
                            echo 'En proceso';
                        else if(strcmp($complexivoSegundoIntentoInfo['exa_estado'],'RP')==0)
                            echo 'Reprobado';
                        else if(strcmp($complexivoSegundoIntentoInfo['exa_estado'],'AP')==0)
                            echo 'Aprobado';
                        ?></div></span>


                    <div id = "datos-ind2" >
                        <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_icono.png"> <span class="txt-ind">Materia 1:
                        <?php echo $nombreMateria1ComplexivoSegundoIntento['mat_nombre'] ?></span></div>


                    <div id = "datos-ind2" >
                        <img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind">Fecha:
                        <?php echo $materia1ComplexivoSegundoIntento['mxe_fecha_1'] ?></span></div>


                    <div id = "datos-ind2" > <img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind">Nota Oral:
                        <?php echo $materia1ComplexivoSegundoIntento['mxe_nota_horal_1'] ?></span></div>


                    <div id = "datos-ind2" ><img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind">Nota escrita:
                        <?php echo $materia1ComplexivoSegundoIntento['mxe_nota_escrita_1'] ?></span></div>




                    <div id = "datos-ind2" ><img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_icono.png"> <span class="txt-ind">Materia 2:
                        <?php echo $nombreMateria2ComplexivoSegundoIntento['mat_nombre'] ?></span></div>


                    <div id = "datos-ind2" ><img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind">Fecha:
                        <?php echo $materia2ComplexivoSegundoIntento['mxe_fecha_1'] ?></span></div>


                        <div id = "datos-ind2" >  <img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind">Nota Oral:
                            <?php echo $materia2ComplexivoSegundoIntento['mxe_nota_horal_1'] ?></span></div>


                            <div id = "datos-ind2" > <img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind">Nota escrita:
                                <?php echo $materia2ComplexivoSegundoIntento['mxe_nota_escrita_1'] ?></span></div>


                    <div id = "datos-ind2" ><img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_icono.png"> <span class="txt-ind">Materia 3:
                        <?php echo $nombreMateria3ComplexivoSegundoIntento['mat_nombre'] ?></span></div>



                    <div id = "datos-ind2" > <img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind">Fecha:
                        <?php echo $materia3ComplexivoSegundoIntento['mxe_fecha_1'] ?></span></div>

                        <div id = "datos-ind2" >     <img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind">Nota Oral:
                            <?php echo $materia3ComplexivoSegundoIntento['mxe_nota_horal_1'] ?></span></div>


                            <div id = "datos-ind2" > <img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind">Nota escrita:
                                <?php echo $materia3ComplexivoSegundoIntento['mxe_nota_escrita_1'] ?></span></div>


                    <div id = "datos-ind2" ><img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_icono.png"> <span class="txt-ind">Materia 4:
                        <?php echo $nombreMateria4ComplexivoSegundoIntento['mat_nombre'] ?></span></div>


                    <div id = "datos-ind2" ><img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind">Fecha:
                        <?php echo $materia4ComplexivoSegundoIntento['mxe_fecha_1'] ?></span></div>


                        <div id = "datos-ind2" ><img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind">Nota Oral:
                            <?php echo $materia4ComplexivoSegundoIntento['mxe_nota_horal_1'] ?></span></div>


                            <div id = "datos-ind2" ><img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind">Nota escrita:
                                <?php echo $materia4ComplexivoSegundoIntento['mxe_nota_escrita_1'] ?></span></div>


                    <div id = "datos-ind2" ><img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_icono.png"> <span class="txt-ind">Materia 5:
                        <?php echo $nombreMateria5ComplexivoSegundoIntento['mat_nombre'] ?></span></div>



                    <div id = "datos-ind2" > <img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind">Fecha:
                        <?php echo $materia5ComplexivoSegundoIntento['mxe_fecha_1'] ?></span></div>


                        <div id = "datos-ind2" > <img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind">Nota Oral:
                            <?php echo $materia5ComplexivoSegundoIntento['mxe_nota_horal_1'] ?></span></div>


                            <div id = "datos-ind2" > <img class = "icn-inner-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_inner_icono.png"> <span class="txt-ind">Nota escrita:
                                <?php echo $materia5ComplexivoSegundoIntento['mxe_nota_escrita_1'] ?></span></div>





                </div></div>  <div id ="container-inner-datos">
                        <div id="datosp-titulo" >  Notas Segundo Intento Examen Complexivo </div>
                        <div class="grafico">
                            <div id="chart_div1" style="width: 500px; height: 450px;"></div>
                        </div></div>

    </div>
                    <div class="clear2"></div>
                    <div id="container-datos">


                        <div id="container-inner-datos">
                            <div id="datosp-titulo">Información de Contacto</div>
                            <div class="datos-header">

                                <div class="datos-nombre-tipo">Examen Complexivo</div>
                            </div>


                            <div class="datos-body">


                                <div id = "datos-ind" >
                                    <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/user_icono.png"> <span class="txt-ind">Responsable Unidad Titulación 1:
                                        <?php echo $responsableTitulacion1['prof_nombre1'].' '.$responsableTitulacion1['prof_nombre2'].' '.$responsableTitulacion1['prof_apellido1'].' '.$responsableTitulacion1['prof_apellido2']; ?></span>
                                </div>

                                <div id = "datos-ind" >        <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/mail_icono.png">  <span class="txt-ind"> Mail PUCE:
                                    <?php echo $responsableTitulacion1['prof_mailpuce'] ?></span></div>
                                <div id = "datos-ind" >         <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_icono.png">     <span class="txt-ind"> Oficina:
                                    <?php echo $responsableTitulacion1['prof_oficina'] ?></span></div>

                                <div id = "datos-ind" >      <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_icono.png"><span class="txt-ind">Telefono:
                                    <?php echo $responsableTitulacion1['prof_telefono'] ?></span></div>


                            </div></div>
                        <div id="container-inner-datos">
                            <div id="datosp-titulo"></div>
                            <div class="datos-header">

                                <div class="datos-nombre-tipo">Examen Complexivo</div>
                            </div>


                            <div class="datos-body">

                                <div id = "datos-ind" >
                                    <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/user_icono.png"><span class="txt-ind">Responsable Unidad Titulación 2:</span>
                                    <?php echo $responsableTitulacion2['prof_nombre1'].' '.$responsableTitulacion2['prof_nombre2'].' '.$responsableTitulacion2['prof_apellido1'].' '.$responsableTitulacion2['prof_apellido2']; ?>
                                </div>

                                <div id = "datos-ind" >           <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/mail_icono.png"> <span class="txt-ind"> Mail PUCE:
                                    <?php echo $responsableTitulacion2['prof_mailpuce'] ?></span></div>
                                <div id = "datos-ind" >             <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_icono.png"><span class="txt-ind"> Oficina:
                                    <?php echo $responsableTitulacion2['prof_oficina'] ?></span></div>

                                <div id = "datos-ind" >           <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/general_icono.png">  <span class="txt-ind">Telefono:
                                    <?php echo $responsableTitulacion2['prof_telefono'] ?></span></div>

                            </div>



                        </div>
                    </div>
                    <?php } ?>

                </div>

<!--  end content -->
<div class="clear-desplegable">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->




<div class="clear"></div>