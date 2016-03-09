<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>static/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>static/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>static/css/dataTables.bootstrap.css">   
    

    <script src="<?php echo base_url()?>static/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo base_url()?>static/js/bootstrap.min.js"></script>   
    <script src="<?php echo base_url()?>static/js/alls.js"></script>
    <!-- DataTable --> 
    <script type="text/javascript" charset="utf8" src="<?php echo base_url()?>static/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="<?php echo base_url()?>static/js/dataTables.bootstrap.js"></script>
    <!-- Notify -->    
    <script src="<?php echo base_url()?>static/js/notify.js"></script>
</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="<?php echo base_url()?>">
                        SGCM 
                    </a>
                </li>
                <?php if($this->session->userdata('login') == TRUE): ?>
                <li class="aligncenter">
                    <span><a href="#"><h4>Bienvenido <?php echo $this->session->userdata('nombre') ?></h4></a></span>
                </li>
                <?php endif; ?>
                
                <?php if($this->session->userdata('tipo') == '1'): ?>
                <li>
                    <a href="<?php echo base_url()?>cusuario/start">Usuario</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>cmedico/start">Medico</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>cespecialidad/start">Especialidad</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>chorario/start">Horario</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>cdmh/start">Asignar Horario</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>ccita/start">Cita</a>
                </li>
                <?php endif; ?>
                <?php if($this->session->userdata('tipo') == '2'): ?>
                <li>
                    <a href="<?php echo base_url()?>ccita/start">Cita</a>
                </li>
                <?php endif; ?>
                
                <?php if($this->session->userdata('login') == TRUE): ?>
                <li>
                    <a href="<?php echo base_url()?>clogin/logout">Cerrar Session</a>
                </li>
                <?php endif; ?>          
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->