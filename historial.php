<?php
    include 'php/conn.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login a | QC Control System</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <script src="js/Business.js"></script>
    <script src="js/Pagination.js"></script>
 

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    <div> 
    </div>
    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><a href="">English</a></i></p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="https://www.facebook.com/Qc-ControlSystem" target="_blank"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     <a class="navbar-brand" href="index.html"><img src="images/logo3.png" alt="logo" width="138" height="73" ></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="about-us.html">Sobre nosotros</a></li>
                        <li><a href="services.html">Servicios</a></li>
                   
                      
                        <li><a href="portfolio.html">Nuestros clientes</a></li> 
                        <li class="active"><a href="contact-us.html">Contacto</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->    
    <div class="wrapHistorial">  
    <h1>Historial de recibos de pago</h1>          
    <div id="wrapId"> A continuación el historial de recibos de pago.</div>      
    
    
    <div id="datosGenerales">          
            <img id="imgTable" src="images/user.gif"  width="150px" >              
                <div>
                    <?php
                     
                    $con = mysqli_connect("www.qc-control.mx","profesio2","Prbendiciones2","recibos_nomina");
                    $result = mysqli_query($con,"select PrimerNombre,SegundoNombre,ApellidoPaterno,ApellidoMaterno,NSS,RFC,p.Puesto, t.Turno from Empleados emp
                                inner join Puestos p on p.idPuesto = emp.idPuesto
                                inner join Turnos t on t.idTurno = emp.idTurno
                                where idEmpleado = 104494");
                    while($row = mysqli_fetch_assoc($result)):
                    ?>                  
                    <!-- <lh>Datos personales </lh> -->
                    <ul>
                        <li><?php echo$row['PrimerNombre'];?> <?php echo$row['SegundoNombre'];?><?php echo$row['ApellidoPaterno'];?><?php echo$row['ApellidoMaterno'];?></li>
                        <li><?php echo$row['Puesto'];?></li>
                        <li><?php echo$row['RFC'];?></li>
                    </ul>
                    <ul>
                        <li><?php echo$row['Turno'];?></li>
                        <li><?php echo$row['NSS'];?></li>                         
                        <li><?php echo$row['NSS'];?></li>                         
                    </ul>

                    <?php endwhile; ?>
                <div>
    </div>
     
    <div>   
                <table class="table" id="tableDt">
                    <tr>
                        <th><?php echo$row['PrimerNombre'];?> <?php echo$row['SegundoNombre'];?><?php echo$row['ApellidoPaterno'];?></th>
                        <th><?php echo$row['Puesto'];?></th>
                        <th><?php echo$row['RFC'];?></th>
                        <th><?php echo$row['Puesto'];?></th>
                    </tr>
                    <?php
                    $con = mysqli_connect("www.qc-control.mx","profesio2","Prbendiciones2","recibos_nomina");
                    $result = mysqli_query($con,"Select emp.PrimerNombre ,emp.SegundoNombre , emp.ApellidoPaterno , emp.ApellidoMaterno, rER.idEmpleado,  emp.NSS, emp.RFC, emp.FechaInicio,p.Puesto,tr.TipoRecibo,sem.idSemana, DATE( sem.FechaInicio) 'Fecha Inicio', DATE(sem.FechaFin) 'Fecha Fin' from relEmpleadosRecibos rER
                                inner join Empleados emp on rER.idEmpleado = emp.idEmpleado
                                inner join Puestos p on emp.idPuesto = p.idPuesto
                                inner join Semanas sem on rER.idRelSemana = sem.idIdentity
                                inner join TiposRecibo tr on rER.idTipoRecibo = tr.idIdentity 
                                Order by sem.idSemana asc");
                    while($row = mysqli_fetch_assoc($result)):
                    ?>
                    <tr>                         
                        <td><?php echo $row['idSemana'];?></td>
                        <td><?php echo $row['Fecha Inicio'];?></td>
                        <td><?php echo $row['Fecha Fin'];?></td>  
                        <td><a href=""></td> 
                    </tr>

                    <?php endwhile; ?>
                </table>

	</div> 			 
     
    <div id="divError" class="alert-error"><?= $_SESSION['message'] ?></div> 
     
    <footer id="footerLogin">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 <a target="_blank" href="http://www.QC-Control.mx/" >QC Control System</a>. Todos los derechos reservados.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="about-us.html">Sobre Nosotros</a></li>
                        <li><a href="services.html">Servicios</a></li>
                        <li><a href="contact-us.html">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
	 
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>

    <script>
    $(".table").DataTable();
</script>
</body>
</html>