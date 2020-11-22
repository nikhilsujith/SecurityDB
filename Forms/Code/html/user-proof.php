<?php
$failMessage = "Access denied. User does not have privilege on this table ";
$successMessage = "Access granted!. User can perform the entered operation on this table";
include("../html/heading.php");
?>
<title>Access Table as a User</title>
<div class="row">
    <h4>Access Table as a User</h4>
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">User Settings</p>
        </div>
        <div class="card-body">
            <form method="POST" action="../php/user-proof-mysql.php">
                <div class="row">
                    <div class="form-group"><label for="phone"><strong>As User With ID</strong></label><input required class="form-control" type="text" placeholder=" " name="userName" /></div>
                </div>
                <div class="row">
                    <div class="form-group"><label for="username"><strong>Access Privilege</strong></label><input required class="form-control" type="text" placeholder=" " name="privType"/></div>
                </div>
                <div class="row">
                    <div class="form-group"><label for="username"><strong>on Table</strong></label><input required class="form-control" type="text" placeholder=" " name="tableName" /></div>
                </div>
                <button class="btn btn-primary btn-sm d-none d-sm-inline-block" type ="submit" name="submit" ><i class="fas fa-download fa-sm text-white-50">
                    </i>&nbsp;Execute Query</button>
            </form>
        </div>
    </div>
    <div class="col">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">Existing Privileges on Table</p>
        </div>
        <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
            <table class="table my-0 table-light table-striped  " id="dataTable">
                <thead class="thead-dark">
                <tr>
                    <th>Privilege ID </th>
                    <th>Table Name</th>
                    <th>Owner ID</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT * FROM user_priv_table";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0)
                {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "
                                 <tr>
                                     <td>". $row['userName']."</td>
                                     <td>". $row['tableName']."</td>
                                     <td>". $row['privType']."</td>
                                </tr>";
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php include("../html/footer.php"); ?>

