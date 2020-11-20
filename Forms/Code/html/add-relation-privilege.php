
<?php
$failMessage = "Privilege Already Allowed on Table''";
$successMessage = "New Privilege Added On Table";
$notOwnerFail = "Access Denied. Owner ID entered, is not the owner of the table";
include("../html/heading.php");
?>
<title>Add Realtion Privilege</title>
                <FORM method="POST" action="../php/add-relation-privilege-mysql.php">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Allow Privileges on Table</h3>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>As Owner with ID:&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;</label>
                            <input type="text" name="ownerID"></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Of Table: &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</label>
                            <input type="text" name="tableName"></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Allow Privilege  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; </label>
                            <input type="text" name="pid"></div>
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
                                            <th>Privilege ID </th>
                                            <th>Table Name</th>
                                            <th>Owner ID</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $sql = "SELECT * FROM relation_privileges";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0)
                                        {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                echo "
                                                     <tr>
                                                         <td>". $row['pid']."</td>
                                                         <td>". $row['tableName']."</td>
                                                         <td>". $row['grantorID']."</td>
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
