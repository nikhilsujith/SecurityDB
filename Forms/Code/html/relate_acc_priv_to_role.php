<?php
$failMessage = "Privilege Already Granted to Role / Wrong Privilege ID ";
$successMessage = "Privilege Granted to Role";
include("../html/heading.php");
?>
<title>Assign Privileges to Role</title>
<div class="row">
    <h4>Adding Account Privileges To A Role</h4>
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">User Settings</p>
        </div>
        <div class="card-body">
            <form method="POST" action="../php/relate-account-privilege.php">
                <div class="row">
                    <div class="form-group"><label for="phone"><strong>Privilege ID</strong></label><input required class="form-control" type="number" placeholder=" " name="pid" /></div>
                </div>
                <div class="row">
                    <div class="form-group"><label for="username"><strong>Role Name</strong></label><input required class="form-control" type="text" placeholder=" " name="roleName" /></div>
                </div>
                <button class="btn btn-primary btn-sm d-none d-sm-inline-block" type ="submit" name="submit" ><i class="fas fa-download fa-sm text-white-50">
                    </i>&nbsp;Execute Query</button>
            </form>
        </div>
    </div>
    <div class="col">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">Existing Role and Account Privileges</p>
        </div>
        <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
            <table class="table my-0 table-light table-striped  " id="dataTable">
                <thead class="thead-dark">
                <tr>
                    <th>Role Name</th>
                    <th>Privilege Type</th>
                    <th>Privilege ID</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT DISTINCT privileges.privType, privileges.pid, user_role.roleName
                        FROM privileges, account_privileges,user_role
                        WHERE  privileges.pid = account_privileges.pid AND user_role.roleName = account_privileges.roleName
                        ORDER BY user_role.roleName;";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0)
                {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "
                                <tr>
                                <td>". $row['roleName']."</td>
                                <td>". $row['privType']."</td>
                                <td>". $row['pid']."</td>
                       
                                </tr>";
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php include("../html/footer.php"); ?>
