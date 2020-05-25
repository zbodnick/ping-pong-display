<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Black Dashboard by Creative Tim
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


    <style>
        html{
        height: 100%;
        }
        body{
        padding-top: 60px;
        height: 100%;
        background: rgb(247,246,246); 
        background: linear-gradient(top, rgb(247,246,246) 0%,rgb(209,208,206) 100%);
        background-size: 100%;
        }
        .wrap{
        margin: 0 auto;
        width: 300px;
        }

        .btn{
        position: relative;
        float: left;
        margin: 40px;
        width: 70px;
        height: 70px;
        border-radius: 50%;
        background: rgb(231,231,231);
        background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2QwZDBkMCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZGZkZmQiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
        box-shadow: inset 0 5px 1px -1px #F0F0F0, inset 0 -3px 1px 1px #C3C3C3, 0 3px 5px 0 rgba(0,0,0, .7);
        color: #BBB9B7;
        text-align: center;
        font-size: 40px;
        line-height: 70px;
        cursor: pointer;
        transition: all .4s ease;
        }

        .btn:hover{
        color: #FF6500; 
        }

        .btn.active{
        color: #FF6500; 
        }

        .btn:after{
        position: absolute;
        top: -15px;
        left: -15px;
        z-index: -1;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background: red;
        background: rgba(233,230,228, .8);
        background: -webkit-linear-gradient(top, rgba(255,151,0,0) 2%,rgba(255,151,0,0) 42%,rgba(254,148,0,0) 44%,rgba(233,63,0,1) 100%);
        background: -moz-linear-gradient(top, rgba(255,151,0,0) 2%, rgba(255,151,0,0) 42%, rgba(254,148,0,0) 44%, rgba(233,63,0,1) 100%);
        background-position: 0 350px;
        background-size:100px 450px;
        box-shadow: inset 0 1px 3px 0px rgba(0,0,0, .6), 0 1px 2px 0 #fff;
        content: "";
        transition: background-position 1s ease; 
        }

        .btn:hover:after{
        background-position: 0px 260px;
        }

        .btn.active:after{
        background-position: 0px 100px;
        }
    </style>


</head>

<?php
//exec('nohup sudo python visualization.py spectrum &');


if (isset($_GET['off'])) {
    exec('sudo killall python');
    echo exec('sudo python off.py 2>&1');
}

if (isset($_GET['on'])) {
    if ($_GET['on'] != 1) {
        $visType = $_GET['on'];
        exec('nohup sudo python visualization.py ' . $visType . ' &'); 
    } else {
        echo exec('sudo python on.py 2>&1');
    }
}

?>

<body class="">
  <div class="wrapper">
        <div class="content">
            <div class="container">

                <div class="card mx-auto w-50">

                    <h5 class="card-header primary-color white-text text-center py-4">
                        <strong>Control Panel</strong>
                    </h5>

                    <div class="card-body px-lg-5 pt-0">

                        <form class="md-form">

                            <a class="power-button on">
                                <i class="tim-icons icon-button-power"></i>
                            </a>

                            <div class="wrap">
                                <div class="btn"><i class="tim-icons icon-button-power"></i></div>
                            </div>

                            <div class="dropdown show">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Select Effect
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="dashboard.php?on=spectrum">SPECTRUM</a>
                                    <a class="dropdown-item" href="dashboard.php?on=scroll">SCROLL</a>
                                    <a class="dropdown-item" href="dashboard.php?on=energy">ENERGY</a>
                                </div>
                            </div>

                            <!-- <button class="btn btn-outline-primary btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Save</button> -->

                        </form>
                    </div>
                </div>

            </div>
       </div>
</div>

<script>
$('.btn').bind('click', function(){
  $(this).toggleClass('active');
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
  <script src="assets/js/black-dashboard.min.js?v=1.0.0"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  
</body>

</html>