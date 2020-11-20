<?php
    $failMessage = "Table Exists";
    $successMessage = "Table Added!";
    include("../html/heading.php");
?>
<title>Create New Table</title>
                <FORM method="POST" action="../php/add_table.php">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Create New Table</h3>
                        <!-- <button class="btn btn-primary btn-sm d-none d-sm-inline-block" type ="submit" name="submit" ><i class="fas fa-download fa-sm text-white-50">
                        </i>&nbsp;Execute Query</button> -->
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Table Name:&nbsp; &nbsp;&nbsp;</label>
                            <input type="text" name="tableName"></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Owner ID:&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</label>
                            <input type="text" name="ownerID"></div>
                    </div>
                    <br/>
                    <button class="btn btn-primary btn-sm d-none d-sm-inline-block" type ="submit" name="submit" ><i class="fas fa-download fa-sm text-white-50">
                        </i>&nbsp;Execute Query</button>
                </FORM>
                <br/><br/>
                <div class="row"><div class="container-fluid">
                        <h3 class="text-dark mb-4">Tables</h3>
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="row">
                                </div>

                                <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                    <table class="table my-0" id="dataTable">
                                        <thead>
                                        <tr>
                                            <th>Table Name</th>
                                            <th>Owner ID</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $sql = "SELECT `tableName`, `ownerID` FROM DbTable;";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0)
                                        {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                echo "
                                <tr>
                                <td>". $row['tableName']."</td>
                                <td>". $row['ownerID']."</td>
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
