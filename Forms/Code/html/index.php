<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
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
                        <h2 class="text-dark mb-0">Security Sub System</h2>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <div class="input-group-append"></div>
                            </div>
                        </form>
                    </div>
                </nav>
                <div class="container-fluid">
                <FORM method="POST" action="../php/add_user.php">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Create New User</h3>
                        <!-- <button class="btn btn-primary btn-sm d-none d-sm-inline-block" type ="submit" name="submit" ><i class="fas fa-download fa-sm text-white-50">
                        </i>&nbsp;Execute Query</button> -->
                        </div>
                    <div class="row">
                        <div class="col">
                        <label>User Name:&nbsp; &nbsp;&nbsp;</label>
                        <input type="text" name="username"></div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <label>Phone:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</label>
                        <input type="text" name="phone"></div>
                    </div>
                    <br/>
                    <button class="btn btn-primary btn-sm d-none d-sm-inline-block" type ="submit" name="submit" ><i class="fas fa-download fa-sm text-white-50">
                        </i>&nbsp;Execute Query</button>
                    </FORM>
                    <br/><br/>
                    <div class="row"><div class="container-fluid">
    <h3 class="text-dark mb-4">Existing User Details</h3>
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
            </div>

            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>User ID </th>
                            <th>Phone</th>
                            <th>User Name</th>
                        </tr>                    
                    </thead>
                    <tbody>
                    <?php
                        $sql = "SELECT `userID`, `phone`,`userName` FROM user_accounts;";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) 
                        {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result))
                            {
                                echo "
                                <tr>
                                <td>". $row['userID']."</td>
                                <td>". $row['phone']."</td>
                                <td>". $row['userName']."</td>
                                </tr>";
                            }
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div></div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <h3 class="text-dark mb-0"></h3>
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>