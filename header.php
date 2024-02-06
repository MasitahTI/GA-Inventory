<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/DataTables/Buttons-1.5.6/css/buttons.bootstrap4.min.css">

    <title>GA Inventory</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="stylenav.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="stylenav.css">
        <!-- <link href='img/logo.png' rel='shortcut icon'> -->


</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>GA Inventory</h3>
            </div>
            <div>
            <ul class="list-unstyled components">
                <li>
                    <a href="data_serahterima.php">
                        <i class="fas fa-copy"> </i>
                        &nbsp;&nbsp; BAST
                    </a>
                </li>
                <li>
                    <a href="data_daftar.php">
                        <i class="fa fa-laptop"> </i>
                        &nbsp; Daftar STB
                    </a>
                </li>
                <li>
                    <a href="data_inv.php">
                        <i class="fa fa-file"> </i>
                        &nbsp; &nbsp; Inventory
                    </a>
                </li>
                <li>
                    <a href="data_aset.php">
                        <i class="fas fa-briefcase"></i>
                        &nbsp;&nbsp; Radio HT
                    </a>
                </li>
                <li>
                    <a href="data_rig.php">
                        <i class="fas fa-briefcase"></i>
                        &nbsp;&nbsp; Radio RIG
                    </a>
                </li>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Settings</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="users.php">Users</a>
                        </li>
                        <li>
                            <a href="register.php">Tambah Akun</a>
                        </li>
                        <li>
                            <a href="logout.php">Logout</a>
                        </li>

                    </ul>
                </li>
            </ul>
            
            </div>
            <ul class="list-unstyled CTAs">
                <li >
                    <h10>
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> by Masitah
                </h10>    
            </li>
            </ul>
        </nav>
        
        <div id="content">


   