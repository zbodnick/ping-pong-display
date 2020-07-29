<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Ping Pong Display Dashboard
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />


    <?php
  //exec('nohup sudo python visualization.py spectrum &');
  
  $disabled = "disabled";

  if (isset($_GET['off'])) {
      $disabled = "disabled";
      exec('sudo killall python');
      echo exec('sudo python off.py 2>&1');
  }
  
  if (isset($_GET['on'])) {
      $disabled = "";
      if ($_GET['on'] != 1) {
          $visType = $_GET['on'];
          exec('nohup sudo python visualization.py ' . $visType . ' &'); 
      } else {
          echo exec('sudo python on.py 2>&1');
      }
  }
  
  ?>


</head>

<body class="">
    <div class="wrapper">
        <div class="content">
            <div class="container w-50">

                <div class="container-fluid">
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 mt-5">
                                    <h4 class="text-center text-muted">
                                        Control Panel
                                    </h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <?php 
                                    if ( isset($_GET['off']) ) {
                                    ?>
                                    <a href="dashboard.php?on=1" class="btn btn-block btn-lg btn-danger">
                                        OFF
                                    </a>
                                    <?php
                                    } else {
                                    ?>
                                    <a href="dashboard.php?off=1" class="btn btn-block btn-lg btn-success">
                                        ON
                                    </a>
                                    <?php } ?>

                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-4">

                                    <a href="dashboard.php?on=spectrum" class="btn btn-block btn-lg btn-primary <?php echo $disabled ?>">
                                        SPECTRUM
                                    </a>
                                </div>
                                <div class="col-md-4">

                                    <a href="dashboard.php?on=scroll" class="btn btn-block btn-lg btn-primary <?php echo $disabled ?>">
                                        SCROLL
                                    </a>
                                </div>
                                <div class="col-md-4">

                                    <a href="dashboard.php?on=energy" class="btn btn-block btn-lg btn-primary <?php echo $disabled ?>">
                                        ENERGY
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        $('.btn-circle').click(function () {
            if ($(this).hasClass('on')) {
                $(this).removeClass('on');
                location.href = ("dashboard.php?off=1");
            } else {
                $(this).addClass('on');
                location.href = ("dashboard.php?on=1");
            }
        });
    </script>

    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/black-dashboard.min.js?v=1.0.0"></script>
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script src="assets/demo/demo.js"></script>

    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>

</body>

</html>