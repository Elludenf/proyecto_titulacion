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
        <div class="datos">

        <div id="container-datos">
            <div id="container-inner-datos">
                <div id="datosp-titulo">Acciones        </div>


            <div id="container-datos">

                <div id="container-inner-btn">

                    <a href='<?php echo site_url('profesor/disertacion_estudiantes')?>' class=""><img src="<?php echo base_url();?>assets/images/pantalla_perfil/disertacion-btn.png"></a>

                </div>
                <div id="container-inner-btn">

                    <a href='<?php echo site_url('profesor/addRevision/'.$profesor['prof_codigo'])?>' class=""><img src="<?php echo base_url();?>assets/images/pantalla_perfil/revision-btn.png"></a>

                </div>
            </div>

            </div>





            <div id="container-inner-datos">
                <div id="datosp-titulo">Datos Personales            </div>


                <div class="datos-header">
                    <div class="datos-nombre-tipo">
                        <?php echo $profesor['prof_apellido1'].' '.$profesor['prof_apellido2'].' '.$profesor['prof_nombre1'].' '.$profesor['prof_nombre2']; ?>
                    </div>
                    <div class="datos-nombre-tipo2">
                    <span>Profesor</span>
                        <?php echo $responsableTitulacion1['case']; ?>
                        <?php echo $responsableTitulacion2['case']; ?>
                    </div>
                </div>


                <div class="datos-body">

                    <div id = "datos-ind" >
                        <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/user_icono.png"><span class="txt-ind"><?php echo $profesor['prof_tipoid']; ?>:
                        <?php echo $profesor['prof_id']; ?>   </span></div>
                    <div id = "datos-ind" >
                        <img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/user_icono.png"><span class="txt-ind">Correo:
                        <?php echo $profesor['prof_mailpuce']; ?>   </span>   </div>
                    <div id="datos-ind"><img class = "icn-ind"src="<?php echo base_url();?>assets/images/pantalla_perfil/user_icono.png"><span class="txt-ind">Materias:
                            <br><?php foreach($materias as $m){ ?>
                        <tr><?php echo '-'.$m['mat_nombre']; ?> <br></tr>
                        <?php } ?>
                    </div>
                </div>



                </div>


            </div>
        </div>


            <div class="container">


            </div>

        </div>

        <!--  end content -->
        <div class="clear-desplegable">&nbsp;</div>
    </div>
    <!--  end content-outer........................................................END -->




    <div class="clear"></div>