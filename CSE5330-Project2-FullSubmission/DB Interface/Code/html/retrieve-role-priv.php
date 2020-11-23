<?php //include ("heading.php") ?>
<!--<body id="page-top">-->
<!--<div id="wrapper">-->
<!--    --><?php //include("sideNav.php") ?>
<!--    <div class="d-flex flex-column" id="content-wrapper">-->
<!--        <div id="content">-->
<!--            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">-->
<!--                <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>-->
<!--                    <h2 class="text-dark mb-0">Security Sub System</h2>-->
<!--                    <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">-->
<!--                        <div class="input-group">-->
<!--                            <div class="input-group-append"></div>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </nav>-->
<!--            <div class="container-fluid">-->
<!--                <FORM method="POST" action="../php/retrieve_role-priv-mysql.php">-->
<!--                    <div class="d-sm-flex justify-content-between align-items-center mb-4">-->
<!--                        <h3 class="text-dark mb-0">Role and Privilege</h3>-->
<!--                        <!-- <button class="btn btn-primary btn-sm d-none d-sm-inline-block" type ="submit" name="submit" ><i class="fas fa-download fa-sm text-white-50">-->
<!--                        </i>&nbsp;Execute Query</button> -->-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="col">-->
<!--                            <label>Role:&nbsp; &nbsp;&nbsp;</label>-->
<!--                            <input type="text" name="roleName">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <br/>-->
<!--                    <button class="btn btn-primary btn-sm d-none d-sm-inline-block" type ="submit" name="submit" ><i class="fas fa-download fa-sm text-white-50">-->
<!--                        </i>&nbsp;Execute Query</button>-->
<!--                </FORM>-->
<!--                <br/><br/>-->
<!--                <div class="row"><div class="container-fluid">-->
<!--                        <h3 class="text-dark mb-4">Existing User Details</h3>-->
<!--                        <div class="card shadow">-->
<!--                            <div class="card-body">-->
<!--                                <div class="row">-->
<!--                                </div>-->
<!--                                <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">-->
<!--                                    <table class="table my-0" id="dataTable">-->
<!--                                        <thead>-->
<!--                                            <tr>-->
<!--                                                <th>Role </th>-->
<!--                                                <th>Privilege</th>-->
<!--                                            </tr>-->
<!--                                        </thead>-->
<!--                                        <body>-->
<!--                                        --><?php
////                                        $roleName = $_POST['roleName'];
//                                        $sql = "SELECT privType, roleName FROM privileges, account_privileges
//                                                    WHERE account_privileges.pid = privileges.pid
//                                                   ";
//                                        $result = mysqli_query($conn, $sql);
////                                        include ("../php/retrieve_role-priv-mysql.php");
//                                        if (mysqli_num_rows($result) > 0)
//                                        {
//                                            // output data of each row
//                                            while($row = mysqli_fetch_assoc($result))
//                                            {
//                                                echo "
//                                <tr>
//                                <td>". $row['roleName']."</td>
//                                <td>". $row['privType']."</td>
//                                </tr>";
//                                            }
//                                        }
//                                        ?>
<!--                                    </table>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <footer class="bg-white sticky-footer">-->
<!--            <h3 class="text-dark mb-0"></h3>-->
<!--            <div class="container my-auto">-->
<!--                <div class="text-center my-auto copyright"></div>-->
<!--            </div>-->
<!--        </footer>-->
<!--    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>-->
<!--<script src="../assets/js/jquery.min.js"></script>-->
<!--<script src="../assets/bootstrap/js/bootstrap.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>-->
<!--<script src="../assets/js/theme.js"></script>-->
<!--</body>-->
<!---->
<!--</html>-->
