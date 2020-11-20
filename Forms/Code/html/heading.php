<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome5-overrides.min.css">
</head>
<body id="page-top">
<div id="wrapper">
    <?php include("sideNav.php") ?>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <h2 class="text-dark mb-0" style="align-content: center">Discretionary Access Control Management</h2>
                    <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <div class="input-group-append"></div>
                        </div>
                    </form>
                </div>
            </nav>
            <div class="container-fluid">


<!--Checks for success or fail message for each page after php processing-->
<?php
if ( isset($_GET['success']) && $_GET['success'] == 0 ) {
echo'
<div class="alert alert-danger" id="flash-msg">
    <center>'.$failMessage.'</center>
</div>';
}
else if(isset($_GET['success']) && $_GET['success'] == 1){
echo'
<div class="alert alert-success" id="flash-msg">
    <center>'.$successMessage.'</center>
</div>';
}
else if(isset($_GET['success']) && $_GET['success'] == 2){
echo'
<div class="alert alert-danger" id="flash-msg">
    <center>'.$notOwnerFail.'</center>
</div>';
}
else if(isset($_GET['success']) && $_GET['success'] == 5){
    echo'
    <div class="alert alert-danger" id="flash-msg">
        <center>'.$roleDoesNotExist.'</center>
    </div>';
    }

else{
echo '';
}
?>
