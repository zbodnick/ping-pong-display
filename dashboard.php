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

                            <div class="switch my-3 py-3">
                                <label>
                                    Off
                                    <input type="checkbox" checked="checked" id="switch">
                                    <span class="lever"></span>
                                    On
                                </label>
                            </div>

                            <div>
                                <select class="mdb-select md-form mb-4 initialized" id="select">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                            </div>

                            <div class="file-field">
                                <div class="btn btn-primary btn-sm float-left ">
                                    <span>Choose file</span>
                                    <input type="file" id="fileInput">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload image">
                                </div>
                            </div>


                            <button class="btn btn-outline-primary btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Save</button>

                        </form>
                    </div>
                </div>

            </div>
       </div>
</div>

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