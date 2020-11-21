<?php
$failMessage = "User Does Not Exist / User Already Assigned";
$successMessage = "User Has Been Assigned a Role";
$roleDoesNotExist = "Entered Role Does Not Exist";
include("../html/heading.php");
?>
<title>Assign Roles to User Account</title>
<div class="row">
    <div class="col-sm-4">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">User Settings</p>
        </div>
        <div class="card-body">
            <form method="POST" action="../php/relate-account-role.php">
                <div class="row">
                    <div class="form-group"><label for="phone"><strong>Role Name</strong></label><input required class="form-control" type="phone" placeholder=" " name="roleName" /></div>
                </div>
                <div class="row">
                    <div class="form-group"><label for="username"><strong>User ID</strong></label><input required class="form-control" type="text" placeholder=" " name="userID" /></div>
                </div>
                <button class="btn btn-primary btn-sm d-none d-sm-inline-block" type ="submit" name="submit" ><i class="fas fa-download fa-sm text-white-50">
                    </i>&nbsp;Execute Query</button>
            </form>
        </div>
    </div>
    <div class="col">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">Existing Role and Assigned Users</p>
        </div>
        <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
            <table class="table my-0 table-light table-striped  " id="dataTable">
                <thead class="thead-dark">
                <tr>
                    <th>Role Name</th>
                    <th>Description</th>
                    <th>User Account ID</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT `roleName`, `description`, `userID` FROM user_role;";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0)
                {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "
                                <tr>
                                <td>". $row['roleName']."</td>
                                <td>". $row['description']."</td>
                                <td>". $row['userID']."</td>
                                </tr>";
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php include("../html/footer.php"); ?>
