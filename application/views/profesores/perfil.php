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
    <div class = "nombre-usuario"><?php echo $profesor['prof_apellido1'].' '.$profesor['prof_apellido2'].' '.$profesor['prof_nombre1'].' '.$profesor['prof_nombre2']; ?></div>
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
                        <?php echo $profesor['prof_apellido1'].' '.$profesor['prof_apellido2'].' '.$profesor['prof_nombre1'].' '.$profesor['prof_nombre2']; ?> <span>Profesor</span>
                    </h3>

                </div>
                <ul class="pricing-content list-unstyled">

                    <li>
                        <i class="fa fa-user"></i>
                        <span class="usuario-item"><?php echo $profesor['prof_tipoid']; ?>:</span>
                        <?php echo $profesor['prof_id']; ?>             </li>

                    <li>
                        <i class="fa fa-envelope"></i>
                        <span class="usuario-item">Correo:</span>
                        <?php echo $profesor['prof_mailpuce']; ?>                 </li>



                </ul>



            </div>


            <div class="container">


            </div>

        </div>

        <!--  end content -->
        <div class="clear-desplegable">&nbsp;</div>
    </div>
    <!--  end content-outer........................................................END -->




    <div class="clear"></div>