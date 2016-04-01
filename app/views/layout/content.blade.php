<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>LOAN System</title>

    <!-- Bootstrap core CSS -->
    <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/css/style.css" rel="stylesheet">
    <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/css/style-responsive.css" rel="stylesheet">

    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      .notification {
        margin: 5% 0;
        opacity: 0.95;
        position: absolute;
        right: 0;
        width: 86%;
        z-index: 1000;
      }
    </style>
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="/" class="logo"><b>Loan System</b></a>
            <!--logo end-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      @include('layout.menu')
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            @if(Session::has('notification'))
              <div id="notificationDiv" class="centered alert-dismissable {{Session::get('level')}}">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <b>{{Session::get('notification')}}</b>
              </div>
            @endif
             @yield("content")
          </section>
      </section>
      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/jquery.js"></script>
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/jquery-1.8.3.min.js"></script>
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/jquery.scrollTo.min.js"></script>
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/sparkline-chart.js"></script>    
	<script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/zabuto_calendar.js"></script>	
	
	<script type="text/javascript">
    //mensaje de alerta
       $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Loan System',
            // (string | mandatory) the text inside the notification
            text: 'CHUY DYSCHUY',
            // (string | optional) the image to display on the left
            image: 'http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/img/dysCHUY.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
